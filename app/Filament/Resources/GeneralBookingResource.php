<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeneralBookingResource\Pages;
use App\Filament\Resources\GeneralBookingResource\RelationManagers;
use App\Models\GeneralBooking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GeneralBookingResource extends Resource
{
    protected static ?string $model = GeneralBooking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Name'),
                Forms\Components\TextInput::make('phone')
                    ->label('Phone'),
                Forms\Components\Textarea::make('comment')
                    ->label('Comment'),
                Forms\Components\TextInput::make('city')
                    ->label('City'),
                Forms\Components\DateTimePicker::make('created_at')
                    ->label('Created At'),



            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name'),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Phone'),
                Tables\Columns\TextColumn::make('comment')
                    ->label('Comment')->limit(50),
                Tables\Columns\TextColumn::make('city')
                    ->label('City'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime('d-m-Y H:i:s'),
            ])
            ->filters([
                //\
                Tables\Filters\Filter::make('name')
                ->form([
                    Forms\Components\TextInput::make('name')
                        ->label('Name')
                        ->placeholder('Search by name...'),
                ])
                ->query(function (Builder $query, array $data): Builder {
                    return $query
                        ->when(
                            $data['name'],
                            fn (Builder $query, $name): Builder => $query->where('name', 'like', "%{$name}%"),
                        );
                }),

            Tables\Filters\Filter::make('phone')
                ->form([
                    Forms\Components\TextInput::make('phone')
                        ->label('Phone')
                        ->placeholder('Search by phone...'),
                ])
                ->query(function (Builder $query, array $data): Builder {
                    return $query
                        ->when(
                            $data['phone'],
                            fn (Builder $query, $phone): Builder => $query->where('phone', 'like', "%{$phone}%"),
                        );
                }),



            ])
            ->actions([
                    Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGeneralBookings::route('/'),
            'create' => Pages\CreateGeneralBooking::route('/create'),
            'edit' => Pages\EditGeneralBooking::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
    {
        return false;
    }
}

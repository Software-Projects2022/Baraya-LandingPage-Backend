<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                // Forms\Components\TextInput::make('name_en')
                //     ->label('Name (English)')
                //     ->required(),
                Forms\Components\TextInput::make('name_ar')
                    ->label('Name (Arabic)')
                    ->required(),
                // Forms\Components\TextInput::make('short_description_en')
                //     ->label('Short Description (English)')
                //     ->required(),
                Forms\Components\Textarea::make('short_description_ar')
                    ->label('Short Description (Arabic)')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name_ar')
                    ->label('Name (Arabic)'),
                // Tables\Columns\TextColumn::make('short_description_ar')
                //     ->label('Short Description (Arabic)'),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}

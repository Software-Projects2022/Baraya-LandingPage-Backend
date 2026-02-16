<?php

namespace App\Filament\Resources\GeneralBookingResource\Pages;

use App\Filament\Resources\GeneralBookingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGeneralBooking extends EditRecord
{
    protected static string $resource = GeneralBookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

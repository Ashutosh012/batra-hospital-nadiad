<?php

namespace App\Filament\Resources\AppointmentsResource\Pages;

use App\Filament\Resources\AppointmentsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAppointments extends EditRecord
{
    protected static string $resource = AppointmentsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

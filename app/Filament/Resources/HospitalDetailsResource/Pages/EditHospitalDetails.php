<?php

namespace App\Filament\Resources\HospitalDetailsResource\Pages;

use App\Filament\Resources\HospitalDetailsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHospitalDetails extends EditRecord
{
    protected static string $resource = HospitalDetailsResource::class;

    protected function getActions(): array
    {
        return [
            //Actions\DeleteAction::make(),
        ];
    }
}

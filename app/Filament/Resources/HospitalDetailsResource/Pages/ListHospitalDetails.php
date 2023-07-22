<?php

namespace App\Filament\Resources\HospitalDetailsResource\Pages;

use App\Filament\Resources\HospitalDetailsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHospitalDetails extends ListRecords
{
    protected static string $resource = HospitalDetailsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

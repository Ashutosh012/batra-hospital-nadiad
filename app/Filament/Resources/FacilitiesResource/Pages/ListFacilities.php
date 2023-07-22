<?php

namespace App\Filament\Resources\FacilitiesResource\Pages;

use App\Filament\Resources\FacilitiesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFacilities extends ListRecords
{
    protected static string $resource = FacilitiesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
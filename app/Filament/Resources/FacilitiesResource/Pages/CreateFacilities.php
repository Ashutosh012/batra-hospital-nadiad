<?php

namespace App\Filament\Resources\FacilitiesResource\Pages;

use App\Filament\Resources\FacilitiesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFacilities extends CreateRecord
{
    protected static string $resource = FacilitiesResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

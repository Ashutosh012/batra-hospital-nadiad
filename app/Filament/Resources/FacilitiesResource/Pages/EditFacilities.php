<?php

namespace App\Filament\Resources\FacilitiesResource\Pages;

use App\Filament\Resources\FacilitiesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFacilities extends EditRecord
{
    protected static string $resource = FacilitiesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

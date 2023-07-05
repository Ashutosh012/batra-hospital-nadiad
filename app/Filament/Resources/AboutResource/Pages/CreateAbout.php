<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\AboutResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAbout extends CreateRecord
{
    protected static string $resource = AboutResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

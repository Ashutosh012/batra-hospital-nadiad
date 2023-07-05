<?php

namespace App\Filament\Resources\ServiceOptionsResource\Pages;

use App\Filament\Resources\ServiceOptionsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateServiceOptions extends CreateRecord
{
    protected static string $resource = ServiceOptionsResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

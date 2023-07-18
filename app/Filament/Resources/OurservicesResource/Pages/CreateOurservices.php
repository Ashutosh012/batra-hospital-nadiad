<?php

namespace App\Filament\Resources\OurservicesResource\Pages;

use App\Filament\Resources\OurservicesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOurservices extends CreateRecord
{
    protected static string $resource = OurservicesResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

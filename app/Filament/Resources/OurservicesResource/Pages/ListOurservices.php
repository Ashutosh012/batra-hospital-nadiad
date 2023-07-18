<?php

namespace App\Filament\Resources\OurservicesResource\Pages;

use App\Filament\Resources\OurservicesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurservices extends ListRecords
{
    protected static string $resource = OurservicesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

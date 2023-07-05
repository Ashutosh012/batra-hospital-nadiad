<?php

namespace App\Filament\Resources\ServiceOptionsResource\Pages;

use App\Filament\Resources\ServiceOptionsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServiceOptions extends ListRecords
{
    protected static string $resource = ServiceOptionsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

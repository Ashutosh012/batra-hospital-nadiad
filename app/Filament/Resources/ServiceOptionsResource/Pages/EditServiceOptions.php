<?php

namespace App\Filament\Resources\ServiceOptionsResource\Pages;

use App\Filament\Resources\ServiceOptionsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceOptions extends EditRecord
{
    protected static string $resource = ServiceOptionsResource::class;

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

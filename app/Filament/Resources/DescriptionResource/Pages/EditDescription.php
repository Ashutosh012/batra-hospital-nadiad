<?php

namespace App\Filament\Resources\DescriptionResource\Pages;

use App\Filament\Resources\DescriptionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDescription extends EditRecord
{
    protected static string $resource = DescriptionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

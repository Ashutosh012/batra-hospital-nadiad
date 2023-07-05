<?php

namespace App\Filament\Resources\HealthProblemsResource\Pages;

use App\Filament\Resources\HealthProblemsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHealthProblems extends EditRecord
{
    protected static string $resource = HealthProblemsResource::class;

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

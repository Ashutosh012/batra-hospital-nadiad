<?php

namespace App\Filament\Resources\HealthProblemsResource\Pages;

use App\Filament\Resources\HealthProblemsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHealthProblems extends CreateRecord
{
    protected static string $resource = HealthProblemsResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

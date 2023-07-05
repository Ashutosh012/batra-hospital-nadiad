<?php

namespace App\Filament\Resources\HealthProblemsResource\Pages;

use App\Filament\Resources\HealthProblemsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHealthProblems extends ListRecords
{
    protected static string $resource = HealthProblemsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

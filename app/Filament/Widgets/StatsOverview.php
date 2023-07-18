<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Appointments;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $appointments = Appointments::all();
        $today_appointments = Appointments::where('appointment_date', \Carbon\Carbon::now())->get();
        $upcoming_appointments = Appointments::where('appointment_date', '>', \Carbon\Carbon::now())->get();
        return [
            Card::make('Total Appointments', count($appointments)),
            Card::make("Today's Appointments", count($today_appointments)),
            Card::make("Upcoming Appointments", count($upcoming_appointments)),
        ];
    }
}

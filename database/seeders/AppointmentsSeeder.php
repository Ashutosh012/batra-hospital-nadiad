<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appointments;

class AppointmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appointments::factory()->create([
            'first_name' => 'ABD',
            'last_name' => 'Batra',
            'email' => 'ashutoshbatra012@gmail.com',
            'mobile_number' => '9979297492',
            'health_problem' => 'Maternity Issues',
            'appointment_date' => '2023-06-24 12:43:59'
        ]);
    }
}

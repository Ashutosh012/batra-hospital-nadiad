<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HospitalDetails;

class HospitalDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HospitalDetails::factory()->create([
            'address' => '1st floor, Kant Arcade, Piplag Chokdi, Nadiad- 387001',
            'helpline_number' => '+91 9101339671'
        ]);
    }
}

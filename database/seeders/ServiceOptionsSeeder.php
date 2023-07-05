<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiceOptions;

class ServiceOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceOptions::factory()->create([
            'title' => 'Pediatric Clinic',
            'slug' => 'pediatric-clinic',
            'icon' => '123.png',
            'description' => 'test description'
        ]);
    }
}

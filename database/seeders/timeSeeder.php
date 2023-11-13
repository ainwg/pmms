<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class timeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Time::create([
            'time' => '08:00 - 10:00',
            
        ]);
        Time::create([
            'time' => '10:00 - 12:00',
            
        ]);
        Time::create([
            'time' => '12:00 - 14:00',
            
        ]);
        Time::create([
            'time' => '14:00 - 16:00',
            
        ]);
        Time::create([
            'time' => '16:00 - 18:00',
            
        ]);
    }
}

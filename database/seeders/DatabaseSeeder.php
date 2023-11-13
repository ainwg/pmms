<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            
            // scheduleSeeder::class,
            // staffSeeder::class,
            // promotionSeeder::class,
            timeSeeder::class,
            // Add more seeders if necessary
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\schedule;

class scheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schedule::factory()
        //     ->count(5)
        //     ->create();
        Schedule::create([
            'name' => 'jad',
            'student_id' => 'CB20110',
        ]);
        Schedule::create([
            'name' => 'syahmie',
            'student_id' => 'CB20654',
        ]);
        Schedule::create([
            'name' => 'syakir',
            'student_id' => 'CB20324',
        ]);
        Schedule::create([
            'name' => 'ahmad',
            'student_id' => 'CB21234',
        ]);

        Schedule::create([
            'name' => 'ismail',
            'student_id' => 'CB23241',
        ]);

    }
}

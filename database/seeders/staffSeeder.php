<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\staff;

class staffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::create([
            'name' => 'amir',
            'student_id' => 'CB20132423',
            'course_name' => 'Compter Science',
            'phone_num' => '013-52632423',
            'email' => 'amir@gmail.com'
        ]);
        Staff::create([
            'name' => 'jad',
            'student_id' => 'CB20110',
            'course_name' => 'Compter Science',
            'phone_num' => '013-52682898',
            'email' => 'jadjafni@gmail.com'
        ]);
        Staff::create([
            'name' => 'aiman',
            'student_id' => 'CB20435',
            'course_name' => 'Compter Science',
            'phone_num' => '013-5268321',
            'email' => 'naim@gmail.com'
        ]);
        Staff::create([
            'name' => 'kairul',
            'student_id' => 'CB20121',
            'course_name' => 'Compter Science',
            'phone_num' => '013-5268543',
            'email' => 'khairul@gmail.com'
        ]);
    }
}

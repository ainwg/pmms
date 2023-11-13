<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\promotion;

class promotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Promotion::create([
            'title' => 'potongan harga',
            'description' => 'Discount 15%',
            'time_start' => '08/06/2023',
            'time_end' =>'10/06/2023'
        ]);
        Promotion::create([
            'title' => 'beli 1 percuma 1',
            'description' => 'hanya untuk air tin sahaja',
            'time_start' => '08/06/2023',
            'time_end' =>'10/06/2023'
        ]);
        
    }
}

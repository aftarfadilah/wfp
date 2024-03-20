<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['nama' => 'Standard',
            'price' => 5_000_000,
            'hotel_id' => '1',],

            ['nama' => 'Deluxe',
            'price' => 50_000_000,
            'hotel_id' => '1',],
            
            ['nama' => 'President Suite',
            'price' => 500_000_000,
            'hotel_id' => '1',],
        ]);
    }
}

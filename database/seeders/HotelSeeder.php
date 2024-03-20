<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotels')->insert([
            ['name' => Str::random(20),
            'address' => Str::random(10),
            'city' => Str::random(5),
                'image' => 'hotel1.jpg',
            'type_id' => 1,],

            ['name' => Str::random(20),
            'address' => Str::random(10),
            'city' => Str::random(5),
                'image' => 'hotel2.jpg',
            'type_id' => 2,],

            ['name' => Str::random(20),
            'address' => Str::random(10),
            'city' => Str::random(5),
                'image' => 'hotel3.jpg',
            'type_id' => 3,],
            ['name' => Str::random(20),
                'address' => Str::random(10),
                'city' => Str::random(5),
                'image' => 'hotel4.jpg',
                'type_id' => 3,],
            ['name' => Str::random(20),
                'address' => Str::random(10),
                'city' => Str::random(5),
                'image' => 'hotel5.jpg',
                'type_id' => 3,],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        $types = [
            ['name' => 'Boutique Hotel', 'created_at' => $now],
            ['name' => 'Bed and Breakfast', 'created_at' => $now],
            ['name' => 'Luxury Hotel', 'created_at' => $now],
            ['name' => 'Budget Hotel', 'created_at' => $now],
            ['name' => 'Hostel', 'created_at' => $now],
            ['name' => 'Motel', 'created_at' => $now],
            ['name' => 'Apartment Hotel', 'created_at' => $now],
            ['name' => 'Eco Lodge', 'created_at' => $now],
            ['name' => 'Casino Hotel', 'created_at' => $now],
            ['name' => 'Chalet', 'created_at' => $now],
            ['name' => 'Guest House', 'created_at' => $now],
            ['name' => 'Spa Resort', 'created_at' => $now],
            ['name' => 'Golf Resort', 'created_at' => $now],
            ['name' => 'Ski Resort', 'created_at' => $now],
            ['name' => 'Health Resort', 'created_at' => $now],
            ['name' => 'Historic Hotel', 'created_at' => $now],
            ['name' => 'Waterfront Hotel', 'created_at' => $now],
            ['name' => 'Airport Hotel', 'created_at' => $now],
            ['name' => 'Suite Hotel', 'created_at' => $now],
            ['name' => 'Extended Stay Hotel', 'created_at' => $now],
            ['name' => 'All-Inclusive Resort', 'created_at' => $now],
            ['name' => 'Castle Hotel', 'created_at' => $now],
            ['name' => 'Floating Hotel', 'created_at' => $now],
            ['name' => 'Riad', 'created_at' => $now],
            ['name' => 'Rural Hotel', 'created_at' => $now],
            ['name' => 'Themed Hotel', 'created_at' => $now],
            ['name' => 'Bungalow', 'created_at' => $now],
            ['name' => 'Treehouse Hotel', 'created_at' => $now],
            ['name' => 'Cruise Ship', 'created_at' => $now],
            ['name' => 'Yacht Hotel', 'created_at' => $now],
            ['name' => 'Campground', 'created_at' => $now],
            ['name' => 'Glamping Site', 'created_at' => $now],
            ['name' => 'Cabin', 'created_at' => $now],
            ['name' => 'RV Park', 'created_at' => $now],
        ];

        DB::table('types')->insert($types);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('place')->insert([
            'category_id' => 2,
            'name' => 'Jogja',
            'price' => '800000',
            'image' => 'image/Jogja.jpg',
            'description' => 'Hottest place this week in MyTravel with a beautiful scenery',
            'duration' => '21 February - 28 February 2022',
        ]);

        DB::table('place')->insert([
            'category_id' => 2,
            'name' => 'Denpasar',
            'price' => '750000',
            'image' => 'image/Bali.jpg',
            'description' => 'Hottest place this week in MyTravel with a beautiful scenery',
            'duration' => '2 March - 10 March 2022',
        ]);

        DB::table('place')->insert([
            'category_id' => 2,
            'name' => 'Kudus',
            'price' => '950000',
            'image' => 'image/Kudus.jpg',
            'description' => 'Hottest place this week in MyTravel with a beautiful scenery',
            'duration' => '12 March - 20 March 2022',
        ]);

        DB::table('place')->insert([
            'category_id' => 2,
            'name' => 'Padang',
            'price' => '650000',
            'image' => 'image/Padang.jpg',
            'description' => 'Hottest place this week in MyTravel with a beautiful scenery',
            'duration' => '21 February - 28 February 2022',
        ]);

        DB::table('place')->insert([
            'category_id' => 2,
            'name' => 'Balikpapan',
            'price' => '700000',
            'image' => 'image/Balikpapan.jpg',
            'description' => 'Hottest place this week in MyTravel with a beautiful scenery',
            'duration' => '21 February - 28 February 2022',
        ]);
    }
}

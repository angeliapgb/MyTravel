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
            'category_id' => 1,
            'name' => 'Anantara Seminyak',
            'price' => '800000',
            'image' => 'image/anantara-seminyak.jpg',
            'description' => 'Hottest hotel this week in MyTravel with a beautiful scenery',
            'address' => 'Jl. Bali 1 No. 12',
            'phone' => '021123123',
        ]);

        DB::table('place')->insert([
            'category_id' => 1,
            'name' => 'Amapa Puerto Vallarta',
            'price' => '750000',
            'image' => 'image/amapa-puerto-vallarta.jpg',
            'description' => 'Hottest hotel this week in MyTravel with a beautiful scenery',
            'address' => 'Jl. Bali 1 No. 12',
            'phone' => '021123123',
        ]);

        DB::table('place')->insert([
            'category_id' => 1,
            'name' => 'Hyatt Regency Beijing Shiyuan',
            'price' => '950000',
            'image' => 'image/hyatt-regency-beijing-shiyuan.jpg',
            'description' => 'Hottest hotel this week in MyTravel with a beautiful scenery',
            'address' => 'Jl. Bali 1 No. 12',
            'phone' => '021123123',
        ]);

        DB::table('place')->insert([
            'category_id' => 1,
            'name' => 'Hyatt Regency Wells Resort',
            'price' => '650000',
            'image' => 'image/hyatt-regency-indian-wells-resort.jpg',
            'description' => 'Hottest hotel this week in MyTravel with a beautiful scenery',
            'address' => 'Jl. Bali 1 No. 12',
            'phone' => '021123123',
        ]);

        DB::table('place')->insert([
            'category_id' => 1,
            'name' => 'Joalies Indian Resort',
            'price' => '700000',
            'image' => 'image/joali-resort.jpg',
            'description' => 'Hottest place this week in MyTravel with a beautiful scenery',
            'address' => 'Jl. Bali 1 No. 12',
            'phone' => '021123123',
        ]);

        DB::table('place')->insert([
            'category_id' => 2,
            'name' => 'Apple Airline',
            'price' => '700000',
            'image' => 'image/joali-resort.jpg',
            'description' => 'Favorite airline this week in MyTravel',
            'address' => 'Jl. Bali 1 No. 12',
            'phone' => '021123123',
        ]);

        DB::table('place')->insert([
            'category_id' => 2,
            'name' => 'Strawberry Airline',
            'price' => '700000',
            'image' => 'image/joali-resort.jpg',
            'description' => 'Favorite airline this week in MyTravel',
            'address' => 'Jl. Bali 1 No. 12',
            'phone' => '021123123',
        ]);

        DB::table('place')->insert([
            'category_id' => 2,
            'name' => 'Peach Airline',
            'price' => '700000',
            'image' => 'image/joali-resort.jpg',
            'description' => 'Favorite airline this week in MyTravel',
            'address' => 'Jl. Bali 1 No. 12',
            'phone' => '021123123',
        ]);

        DB::table('place')->insert([
            'category_id' => 2,
            'name' => 'Lemon Airline',
            'price' => '700000',
            'image' => 'image/joali-resort.jpg',
            'description' => 'Favorite airline this week in MyTravel',
            'address' => 'Jl. Bali 1 No. 12',
            'phone' => '021123123',
        ]);

        DB::table('place')->insert([
            'category_id' => 2,
            'name' => 'Watermelon Airline',
            'price' => '700000',
            'image' => 'image/joali-resort.jpg',
            'description' => 'Favorite airline this week in MyTravel',
            'address' => 'Jl. Bali 1 No. 12',
            'phone' => '021123123',
        ]);
    }
}

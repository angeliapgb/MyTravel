<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('place_detail')->insert([
            'place_id' => 1,
            'place' => 'Candi Borobudur',
            'day' => '21 February 2022',
            'detail' => 'Learn about the history of Candi Borobudur',
        ]);

        DB::table('place_detail')->insert([
            'place_id' => 1,
            'place' => 'Candi Prambanan',
            'day' => '22 February 2022',
            'detail' => 'Learn about the history of Candi Prambanan',
        ]);

        DB::table('place_detail')->insert([
            'place_id' => 1,
            'place' => 'Candi Borobudur',
            'day' => '21 February 2022',
            'detail' => 'Learn about the history of Candi Borobudur',
        ]);

        DB::table('place_detail')->insert([
            'place_id' => 1,
            'place' => 'Candi Prambanan',
            'day' => '22 February 2022',
            'detail' => 'Learn about the history of Candi Prambanan',
        ]);

        DB::table('place_detail')->insert([
            'place_id' => 1,
            'place' => 'Candi Borobudur',
            'day' => '21 February 2022',
            'detail' => 'Learn about the history of Candi Borobudur',
        ]);

        DB::table('place_detail')->insert([
            'place_id' => 1,
            'place' => 'Candi Borobudur',
            'day' => '21 February 2022',
            'detail' => 'Learn about the history of Candi Borobudur',
        ]);

        DB::table('place_detail')->insert([
            'place_id' => 2,
            'place' => 'Candi Prambanan',
            'day' => '22 February 2022',
            'detail' => 'Learn about the history of Candi Prambanan',
        ]);

        DB::table('place_detail')->insert([
            'place_id' => 3,
            'place' => 'Candi Prambanan',
            'day' => '22 February 2022',
            'detail' => 'Learn about the history of Candi Prambanan',
        ]);

        DB::table('place_detail')->insert([
            'place_id' => 4,
            'place' => 'Candi Prambanan',
            'day' => '22 February 2022',
            'detail' => 'Learn about the history of Candi Prambanan',
        ]);

        DB::table('place_detail')->insert([
            'place_id' => 5,
            'place' => 'Candi Prambanan',
            'day' => '22 February 2022',
            'detail' => 'Learn about the history of Candi Prambanan',
        ]);
    }
}

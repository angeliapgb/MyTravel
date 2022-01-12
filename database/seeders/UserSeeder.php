<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_name' => 'admin',
            'name' => 'Admin',
            'age' => '20',
            'gender' => 'Male',
            'birthday' => Carbon::parse('2000-03-23'),
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'nik' => '3271231234567891',
            'phone' => '081212345678',
            'address' => 'Jl. Kemanggisan No. 15, Jakarta Selatan',
        ]);

        DB::table('users')->insert([
            'name' => 'Sohyun',
            'age' => '20',
            'gender' => 'Female',
            'birthday' => Carbon::parse('2001-04-19'),
            'email' => 'sohyunrp11@gmail.com',
            'password' => bcrypt('sohyun123'),
            'nik' => '3275041234567891',
            'phone' => '081212341234',
            'address' => 'Jl. Anggrek No. 12, Jakarta Barat',
        ]);
    }
}

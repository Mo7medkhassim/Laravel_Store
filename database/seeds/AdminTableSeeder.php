<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function PHPSTORM_META\type;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([

            'name' => 'killua',

            'avatar' => '1.jpg',
            'phone' => '01111111111',
            'email' => 'killua@gmail.com',

            'password' => Hash::make(123456789),



        ]);

    }
}

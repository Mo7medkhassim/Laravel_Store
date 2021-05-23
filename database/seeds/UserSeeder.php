<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

            'name' => 'user',
            'email' => 'user@gmail.com',
            'avatar' => 'kg.jpg',
            'password' => Hash::make(123456789),


        ]);

    }

}

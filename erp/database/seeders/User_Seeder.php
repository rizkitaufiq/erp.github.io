<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            ['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => '1234'],
            ['name' => 'rizki', 'email' => 'rizki@gmail.com', 'password' => '1234'],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            ['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('1234')],
            ['name' => 'rizki', 'email' => 'rizki@gmail.com', 'password' => Hash::make('1234')],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Database\Seeders\Document\Document_Type_Seeder;
use Database\Seeders\Document\Document_Seeder;
use Database\Seeders\User_Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            User_Seeder::class,
            Document_Type_Seeder::class,
            Document_Seeder::class,
        ]);

    }
}

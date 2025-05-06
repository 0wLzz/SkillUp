<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tutor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.php
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Tutor::factory(1)->create();

        Category::factory()->create([
            'name' => 'Self Improvement'
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

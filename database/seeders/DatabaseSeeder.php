<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
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
        // Tutor::factory(1)->create();

        // Category::factory()->create([
        //     'name' => 'Self Improvement'
        // ]);

        Course::factory(5)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

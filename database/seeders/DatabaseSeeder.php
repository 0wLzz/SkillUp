<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseBenefit;
use App\Models\Curriculum;
use App\Models\MaterialVideo;
use App\Models\MaterialWorksheet;
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

        $categories = ['Self Improvement', 'Communication', 'Critical Thinking'];
        foreach ($categories as $category) {
            Category::factory()->create([
                'name' => $category
            ]);
        }

        Admin::factory(1)->create();
        $this->call([
            TutorSeeder::class,
            CourseSeeder::class,
            CourseBenefitSeeder::class,
        ]);

        Curriculum::factory(50)->create();
        MaterialVideo::factory(50)->create();
        MaterialWorksheet::factory(50)->create();
    }
}

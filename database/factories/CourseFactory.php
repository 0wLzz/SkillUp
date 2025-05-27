<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Course;
use App\Models\Curriculum;
use App\Models\MaterialVideo;
use App\Models\MaterialWorksheet;
use App\Models\Tutor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'tutor_id' => Tutor::factory(),
            'title' => fake()->title(),
            'subtitle' => fake()->title(),
            'description' => fake()->text(100),
            'price' => fake()->numberBetween(500000, 1500000),
            'is_featured' => fake()->numberBetween(0, 1)
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Course $course) {
            Curriculum::factory()
                ->count(2)
                ->for($course, 'course')
                ->for($course->tutor, 'tutor')
                ->create()
                ->each(function ($curriculum) {
                    MaterialVideo::factory()->count(2)
                        ->for($curriculum)->create();

                    MaterialWorksheet::factory()->count(1)
                        ->for($curriculum)
                        ->create();
                });
        });
    }
}

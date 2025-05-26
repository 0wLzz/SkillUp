<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Curriculum;
use App\Models\MaterialVideo;
use App\Models\MaterialWorksheet;
use App\Models\Tutor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tutor>
 */
class TutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'occupation' => fake()->jobTitle(),
            // 'email_verified_at' => now(),
            'password' => '123',
        ];
    }
}

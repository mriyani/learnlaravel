<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // table attributes
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(),
            'salary' => '$' . number_format(fake()->numberBetween(30000, 100000)) . ' USD'
        ];
    }
}

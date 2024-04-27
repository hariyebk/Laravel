<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // It a new employer factory and uses it's id property to assign it to employer_id as a reference
        return [
            'employer_id'=> Employer::factory() ,
            'title' => fake()->jobTitle(),
            'experience' => '3',
            'salary'=> '50,000'
        ];
    }
}

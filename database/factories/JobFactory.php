<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
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
        // referencing the employer factory for the employer_id property. it first creates the employer factory and uses the id property to assign it to employer_id property
        return [
            'employer_id'=> Employer::factory() ,
            'title' => fake()->jobTitle(),
            'experience' => '3',
            'salary'=> '50,000'
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\person>
 */
class personFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "firstName" => fake()->firstName(),
            "lastName" => fake()->lastName(),
            "dateOfBirth" => fake()->date(),
            "height" => fake()->numberBetween(40, 230)
        ];
    }
}
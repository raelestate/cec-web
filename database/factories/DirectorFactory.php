<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DirectorFactory extends Factory
{
    public function definition(): array
    {
        return [
            'directors_name' => fake()->name,
            'directors_position' => fake()->jobTitle,
            'directors_image' => fake()->imageUrl(),
        ];
    }
}
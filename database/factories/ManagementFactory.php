<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ManagementFactory extends Factory
{
    public function definition(): array
    {
        return [
            'management_name' => fake()->name,
            'management_position' => fake()->jobTitle,
            'management_image' => fake()->imageUrl(),
        ];
    }
}
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listings>
 */
class ListingFactory extends Factory
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
            'tags' => fake()->tags(),
            'company' => fake()->company(),
            'loaction' => fake()->city(),
            'email' => fake()->safeEmail(),
            'website' => fake()->url(),
            'description' => fake()->paragraph(5),
        ];
    }
}

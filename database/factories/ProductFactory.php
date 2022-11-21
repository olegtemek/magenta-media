<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'page_id' => fake()->numberBetween(1, 5),
            'title' => fake()->text(40),
            'image' => 'images/Screenshot 2022-11-09 at 11.15.05 AM.png',
            'price' => fake()->numberBetween(200, 4000),
            'description' => fake()->text(120)
        ];
    }
}

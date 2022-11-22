<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
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
            'image' => 'images/Screenshot 2022-11-09 at 11.15.05 AM.png',
            'title' => fake()->text(20),
        ];
    }
}

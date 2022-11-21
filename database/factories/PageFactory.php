<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->text(14);
        return [
            'title' => $title,
            'subtitle' => 'text intro',
            'subtitle_bold' => 'text intro bold',
            'custom_title' => 'title custom',
            'image' => 'image',
            'custom_description' => 'description custom',
            'custom_image' => 'image',
            'slug' => Str::slug($title),
        ];
    }
}

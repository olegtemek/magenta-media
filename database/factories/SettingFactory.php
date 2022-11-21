<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email' => 'info@name.kz',
            'address' => 'г.Алматы, ул. Ади-шарипова, 92',
            'number_whatsapp' => '+7 (771) 754 03 51',
            'number' => '+7 (771) 754 03 51',
            'instagram' => 'magentamedia.kz'
        ];
    }
}

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
            'address' => 'ул. Толе-би 108, 3 этаж, офис 35/2',
            'number_whatsapp' => '+77717540351',
            'number' => '+7 (771) 754 03 51',
            'instagram' => 'magentamedia.kz'
        ];
    }
}

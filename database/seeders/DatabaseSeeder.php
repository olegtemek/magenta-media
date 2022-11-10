<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Page::factory()->create([
            'title' => 'Title',
            'custom_title' => 'Custom',
            'custom_description' => 'Custom',
            'custom_image' => 'images/Screenshot 2022-11-09 at 11.15.05 AM.png',
            'image' => 'images/Screenshot 2022-11-09 at 11.15.05 AM.png',
            'slug' => 'title'
        ]);
        \App\Models\User::factory()->create([
            'email' => 'a@a.a',
            'password' => Hash::make('a')
        ]);
    }
}

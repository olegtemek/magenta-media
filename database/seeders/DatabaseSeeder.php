<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gallery;
use App\Models\Page;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        // Page::factory(5)->create();

        $pages = [
            [
                'title' => 'Наружная реклама',
                'subtitle' => 'text intro',
                'subtitle_bold' => 'text intro bold',
                'custom_title' => 'title custom',
                'image' => 'pages/narug.png',
                'custom_description' => 'description custom',
                'custom_image' => 'image',
                'slug' => 'narujnyaa-reklama',
            ],
            [
                'title' => 'Типография',
                'subtitle' => 'text intro',
                'subtitle_bold' => 'text intro bold',
                'custom_title' => 'title custom',
                'image' => 'pages/tipogr.png',
                'custom_description' => 'description custom',
                'custom_image' => 'image',
                'slug' => 'tipografiya',
            ],
            [
                'title' => 'Сувенирная продукция',
                'subtitle' => 'text intro',
                'subtitle_bold' => 'text intro bold',
                'custom_title' => 'title custom',
                'image' => 'pages/zont.png',
                'custom_description' => 'description custom',
                'custom_image' => 'image',
                'slug' => 'suvenir',
            ],
            [
                'title' => 'Пошив и брендирование униформы',
                'subtitle' => 'text intro',
                'subtitle_bold' => 'text intro bold',
                'custom_title' => 'title custom',
                'image' => 'pages/poshiv.png',
                'custom_description' => 'description custom',
                'custom_image' => 'image',
                'slug' => 'poshiv',
            ],
            [
                'title' => 'Производство одноразовых стаканов',
                'subtitle' => 'text intro',
                'subtitle_bold' => 'text intro bold',
                'custom_title' => 'title custom',
                'image' => 'pages/stak.png',
                'custom_description' => 'description custom',
                'custom_image' => 'image',
                'slug' => 'proizvod',
            ],
        ];

        DB::table('pages')->insert($pages);

        Setting::factory(1)->create();

        Gallery::factory(100)->create();

        \App\Models\User::factory()->create([
            'email' => 'a@a.a',
            'password' => Hash::make('a')
        ]);

        Product::factory(100)->create();
    }
}

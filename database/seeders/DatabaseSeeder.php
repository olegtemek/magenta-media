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
                'custom_title' => 'Индивидуальный проект',
                'image' => 'pages/narug.png',
                'custom_description' => 'Каждый проект изготавливается изходя  из пожеланий клиента',
                'custom_image' => 'images/custom_block/custom_image1.png',
                'slug' => 'narujnyaa-reklama',
            ],
            [
                'title' => 'Типография',
                'subtitle' => 'text intro',
                'custom_title' => 'Индивидуальный проект',
                'image' => 'pages/tipogr.png',
                'custom_description' => 'Каждый проект изготавливается изходя  из пожеланий клиента',
                'custom_image' => 'images/custom_block/custom_image1.png',
                'slug' => 'tipografiya',
            ],
            [
                'title' => 'Сувенирная продукция',
                'subtitle' => 'text intro',
                'custom_title' => 'Индивидуальный проект',
                'image' => 'pages/zont.png',
                'custom_description' => 'Каждый проект изготавливается изходя  из пожеланий клиента',
                'custom_image' => 'images/custom_block/custom_image1.png',
                'slug' => 'suvenir',
            ],
            [
                'title' => 'Пошив и брендирование униформы',
                'subtitle' => 'text intro',
                'custom_title' => 'Индивидуальный проект',
                'image' => 'pages/poshiv.png',
                'custom_description' => 'Каждый проект изготавливается изходя  из пожеланий клиента',
                'custom_image' => 'images/custom_block/custom_image1.png',
                'slug' => 'poshiv',
            ],
            [
                'title' => 'Производство одноразовых стаканов',
                'subtitle' => 'text intro',
                'custom_title' => 'Индивидуальный проект',
                'image' => 'pages/stak.png',
                'custom_description' => 'Каждый проект изготавливается изходя  из пожеланий клиента',
                'custom_image' => 'images/custom_block/custom_image1.png',
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

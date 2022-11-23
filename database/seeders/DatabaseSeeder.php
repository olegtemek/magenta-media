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
                'subtitle' => 'Изготовление <strong>наружной рекламы</strong>',
                'custom_title' => 'Индивидуальный проект',
                'image' => 'pages/narug.png',
                'description' => '',
                'custom_description' => 'Каждый проект изготавливается исходя из пожеланий клиента',
                'custom_image' => 'images/custom_block/custom_image1.png',
                'slug' => 'narujnyaa-reklama',
            ],
            [
                'title' => 'Типография',
                'subtitle' => 'Типография',
                'description' => 'Гарантируем высокое качество и соблюдение сроков',
                'custom_title' => 'Большой объем работ',
                'image' => 'pages/tipogr.png',
                'custom_description' => 'Мы можем изготовить большой объём материалов',
                'custom_image' => 'images/custom_block/custom_image2.png',
                'slug' => 'tipografiya',
            ],
            [
                'title' => 'Сувенирная продукция',
                'subtitle' => '<strong>сувенирная<br>продукция</strong>',
                'description' => '',
                'custom_title' => 'Изготовление под заказ',
                'image' => 'pages/zont.png',
                'custom_description' => 'Мы изготавливаем продукцию под заказ добавляя ваши фирменные цвета и логотипы исходя из пожеланий',
                'custom_image' => 'images/custom_block/custom_image3.png',
                'slug' => 'suvenir',
            ],
            [
                'title' => 'Пошив и брендирование униформы',
                'subtitle' => 'Пошив и брендирование <strong>униформы</strong>',
                'description' => '',
                'custom_title' => 'Изготовление под заказ',
                'image' => 'pages/poshiv.png',
                'custom_description' => 'Мы изготавливаем продукцию под заказ добавляя ваши фирменные цвета и логотипы исходя из пожеланий',
                'custom_image' => 'images/custom_block/custom_image4.png',
                'slug' => 'poshiv',
            ],
            [
                'title' => 'Производство одноразовых стаканов',
                'subtitle' => 'Производство <strong>бумажных стаканчиков</strong>',
                'description' => '',
                'custom_title' => 'Изготовление под заказ',
                'image' => 'pages/stak.png',
                'custom_description' => 'Мы изготавливаем продукцию под заказ добавляя ваши фирменные цвета и логотипы исходя из пожеланий',
                'custom_image' => 'images/custom_block/custom_image5.png',
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

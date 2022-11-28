<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gallery;
use App\Models\Page;
use App\Models\Photo;
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
                'intro_bg' => '',
                'intro_bg_cover' => '',
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
                'intro_bg' => 'images/intros/intro2.jpg',
                'intro_bg_cover' => 'images/intros/intro2_1.png',
            ],
            [
                'title' => 'Сувенирная продукция',
                'subtitle' => '<strong>сувенирная<br>продукция</strong>',
                'description' => 'Гарантируем высокое качество и соблюдение сроков',
                'custom_title' => 'Изготовление под заказ',
                'image' => 'pages/zont.png',
                'custom_description' => 'Мы изготавливаем продукцию под заказ добавляя ваши фирменные цвета и логотипы исходя из пожеланий',
                'custom_image' => 'images/custom_block/custom_image3.png',
                'slug' => 'suvenir',
                'intro_bg' => 'images/intros/intro3.jpg',
                'intro_bg_cover' => 'images/intros/intro3_1.png',
            ],
            [
                'title' => 'Пошив и брендирование униформы',
                'subtitle' => 'Пошив и брендирование <strong>униформы</strong>',
                'description' => 'Гарантируем высокое качество и соблюдение сроков',
                'custom_title' => 'Изготовление под заказ',
                'image' => 'pages/poshiv.png',
                'custom_description' => 'Мы изготавливаем продукцию под заказ добавляя ваши фирменные цвета и логотипы исходя из пожеланий',
                'custom_image' => 'images/custom_block/custom_image4.png',
                'slug' => 'poshiv',
                'intro_bg' => 'images/intros/intro4.jpg',
                'intro_bg_cover' => 'images/intros/intro4_1.png',
            ],
            [
                'title' => 'Производство одноразовых стаканов',
                'subtitle' => 'Производство <strong>бумажных стаканчиков</strong>',
                'description' => 'Гарантируем высокое качество и соблюдение сроков',
                'custom_title' => 'Изготовление под заказ',
                'image' => 'pages/stak.png',
                'custom_description' => 'Мы изготавливаем продукцию под заказ добавляя ваши фирменные цвета и логотипы исходя из пожеланий',
                'custom_image' => 'images/custom_block/custom_image5.png',
                'slug' => 'proizvod',
                'intro_bg' => 'images/intros/intro5.jpg',
                'intro_bg_cover' => 'images/intros/intro5_1.png',
            ],
        ];

        DB::table('pages')->insert($pages);


        $products = [
            [
                'page_id' => 1,
                'title' => 'cветовые буквы',
                'image' => 'images/products/1_2.jpg',
                'material' => 'Акрил',
                'price' => '20 000 тг',
                'description' => 'Световые буквы купить по выгодным ценам можно у нас, поставляются в любых размерах'
            ],
            [
                'page_id' => 1,
                'title' => 'Псевдообъемные буквы',
                'image' => 'images/products/1_3.jpg',
                'material' => '',
                'price' => '20 000 тг',
                'description' => 'Псевдообъемные буквы купить по выгодным ценам можно у нас, поставляются в любых размерах'
            ],
            [
                'page_id' => 1,
                'title' => 'Брендирование банкоматов',
                'image' => 'images/products/1_1.jpg',
                'material' => '',
                'price' => '25 000 тг',
                'description' => 'Наноситься любое изображение на банкоматы, терминалы'
            ],
            [
                'page_id' => 1,
                'title' => 'Оформление входной группы',
                'image' => 'images/products/1_4.jpg',
                'material' => '',
                'price' => '',
                'description' => 'Украшается главный вход в ваше заведение на ваш вкус, дизайн подбирают наши специалисты'
            ],
            [
                'page_id' => 1,
                'title' => 'cветовые буквы',
                'image' => 'images/products/1_2.jpg',
                'material' => 'Акрил',
                'price' => '20 000 тг',
                'description' => 'Световые буквы купить по выгодным ценам можно у нас, поставляются в любых размерах'
            ],
            [
                'page_id' => 1,
                'title' => 'cветовые буквы',
                'image' => 'images/products/1_2.jpg',
                'material' => 'Акрил',
                'price' => '20 000 тг',
                'description' => 'Световые буквы купить по выгодным ценам можно у нас, поставляются в любых размерах'
            ],

            [
                'page_id' => 2,
                'title' => 'Листовки',
                'image' => 'images/products/2_1.jpg',
                'material' => '',
                'price' => '',
                'description' => 'Листовки Алматы'
            ],
            [
                'page_id' => 2,
                'title' => 'Печать этикеток и стикеров',
                'image' => 'images/products/2_2.jpg',
                'material' => '',
                'price' => '9 тг/шт',
                'description' => 'Печать Алматы'
            ],
            [
                'page_id' => 2,
                'title' => 'Брошюры',
                'image' => 'images/products/2_3.jpg',
                'material' => '',
                'price' => '',
                'description' => 'Брошюры алматы Алматы'
            ],
            [
                'page_id' => 2,
                'title' => 'Открытки',
                'image' => 'images/products/2_4.jpg',
                'material' => '',
                'price' => '',
                'description' => 'Открытки алматы Алматы'
            ],
            [
                'page_id' => 2,
                'title' => 'Открытки',
                'image' => 'images/products/2_4.jpg',
                'material' => '',
                'price' => '',
                'description' => 'Открытки алматы Алматы'
            ],
            [
                'page_id' => 2,
                'title' => 'Открытки',
                'image' => 'images/products/2_4.jpg',
                'material' => '',
                'price' => '',
                'description' => 'Открытки алматы Алматы'
            ],
            [
                'page_id' => 3,
                'title' => 'Брелок-фонарик',
                'image' => 'images/products/3_1.jpg',
                'material' => '',
                'price' => '220 тг',
                'description' => 'Брелок-фонарик алматы Алматы'
            ],
            [
                'page_id' => 3,
                'title' => 'кружка чашка и ложка',
                'image' => 'images/products/3_2.jpg',
                'material' => '',
                'price' => '700 тг',
                'description' => 'кружка чашка и ложка алматы алматы'
            ],
            [
                'page_id' => 3,
                'title' => 'Дождевик',
                'image' => 'images/products/3_3.jpg',
                'material' => '',
                'price' => '600 тг',
                'description' => 'Дождевик алматы алматы'
            ],
            [
                'page_id' => 3,
                'title' => 'Зонт автоматический',
                'image' => 'images/products/3_4.jpg',
                'material' => '',
                'price' => '1 500 тг',
                'description' => 'Зонт автоматический алматы алматы'
            ],
            [
                'page_id' => 3,
                'title' => 'Зонт автоматический',
                'image' => 'images/products/3_4.jpg',
                'material' => '',
                'price' => '1 500 тг',
                'description' => 'Зонт автоматический алматы алматы'
            ],
            [
                'page_id' => 3,
                'title' => 'Зонт автоматический',
                'image' => 'images/products/3_4.jpg',
                'material' => '',
                'price' => '1 500 тг',
                'description' => 'Зонт автоматический алматы алматы'
            ],

            [
                'page_id' => 4,
                'title' => 'Рубашка POLO',
                'image' => 'images/products/4_1.jpg',
                'material' => 'Хлопок',
                'price' => 'от 1 700 тг',
                'description' => 'Рубашка POLO алматы алматы'
            ],
            [
                'page_id' => 4,
                'title' => 'флисовая шапка',
                'image' => 'images/products/4_2.jpg',
                'material' => '',
                'price' => '700 тг',
                'description' => 'флисовая шапка алматы алматы'
            ],
            [
                'page_id' => 4,
                'title' => 'футболка',
                'image' => 'images/products/4_3.jpg',
                'material' => '',
                'price' => '900 тг',
                'description' => 'футболка алматы алматы'
            ],
            [
                'page_id' => 4,
                'title' => 'толстовка',
                'image' => 'images/products/4_4.jpg',
                'material' => '',
                'price' => 'от 6 000 тг',
                'description' => 'толстовка алматы алматы'
            ],
            [
                'page_id' => 4,
                'title' => 'футболка',
                'image' => 'images/products/4_3.jpg',
                'material' => '',
                'price' => '900 тг',
                'description' => 'футболка алматы алматы'
            ],
            [
                'page_id' => 4,
                'title' => 'толстовка',
                'image' => 'images/products/4_4.jpg',
                'material' => '',
                'price' => 'от 6 000 тг',
                'description' => 'толстовка алматы алматы'
            ],

            [
                'page_id' => 5,
                'title' => 'однослойный с дизайном заказчика',
                'image' => 'images/products/5_1.jpg',
                'material' => '',
                'price' => '',
                'description' => 'однослойный с дизайном заказчика алматы алматы'
            ],
            [
                'page_id' => 5,
                'title' => 'однослойный с дизайном флексознак',
                'image' => 'images/products/5_2.jpg',
                'material' => '',
                'price' => '',
                'description' => 'однослойный с дизайном флексознак алматы алматы'
            ],
            [
                'page_id' => 5,
                'title' => 'двухслоный с дизайном заказчика',
                'image' => 'images/products/5_3.jpg',
                'material' => '',
                'price' => '',
                'description' => 'двухслоный с дизайном заказчика алматы алматы'
            ],
            [
                'page_id' => 5,
                'title' => 'двухслойный с дизайном флексознак',
                'image' => 'images/products/5_4.jpg',
                'material' => '',
                'price' => '',
                'description' => 'двухслойный с дизайном флексознак алматы алматы'
            ],
            [
                'page_id' => 5,
                'title' => 'двухслоный с дизайном заказчика',
                'image' => 'images/products/5_3.jpg',
                'material' => '',
                'price' => '',
                'description' => 'двухслоный с дизайном заказчика алматы алматы'
            ],
            [
                'page_id' => 5,
                'title' => 'двухслойный с дизайном флексознак',
                'image' => 'images/products/5_4.jpg',
                'material' => '',
                'price' => '',
                'description' => 'двухслойный с дизайном флексознак алматы алматы'
            ],


        ];

        DB::table('products')->insert($products);

        Setting::factory(1)->create();


        \App\Models\User::factory()->create([
            'email' => 'a@a.a',
            'password' => Hash::make('a')
        ]);

        Gallery::factory(20)->create();
        Photo::factory(40)->create();
    }
}

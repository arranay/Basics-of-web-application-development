<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
		  'name' => 'LG',
		  'description' => 'Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue.',
		  'photo' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
		  'price' => 399.01
		]);

		DB::table('products')->insert([
		  'name' => 'Samsung Galaxy S8',
		  'description' => 'Диагональ (дюйм): 5.8
							Разрешение (пикс): 2960x1440
							Встроенная память (Гб): 64
							Фотокамера (Мп): 12
							Процессор: Samsung Exynos 8895 Octa',
		  'photo' => 'https://cdn.svyaznoy.ru/upload/iblock/d1c/4165313_10.jpg/resize/483x483/hq/',
		  'price' => 299.71
		]);

		DB::table('products')->insert([
		  'name' => 'Honor 20 Pro',
		  'description' => 'Диагональ (дюйм): 6.26
							Разрешение (пикс): 2340x1080
							Встроенная память (Гб): 256
							Фотокамера (Мп): 48 + 16 + 8 + 2 (четыре основные камеры)
							Оптический зум: x3',
		  'photo' => 'https://cdn.svyaznoy.ru/upload/iblock/870ad14aa9255041eac3a9e7e7a271b0/1.jpg/resize/483x483/hq/',
		  'price' => 399.91
		]);

		DB::table('products')->insert([
		  'name' => 'Apple iPhone 11',
		  'description' => 'Диагональ (дюйм): 6.1
							Разрешение (пикс): 1792x828
							Встроенная память (Гб): 256
							Фотокамера (Мп): 12 + 12 (двойная)
							Оптический зум: x2',
		  'photo' => 'https://cdn.svyaznoy.ru/upload/iblock/d47/iphone_11_g_2.jpg/resize/483x483/hq/',
		  'price' => 996.91
		]);

		DB::table('products')->insert([
		  'name' => 'Xiaomi Redmi',
		  'description' => 'Диагональ (дюйм): 6.22
							Разрешение (пикс): 1520x720
							Встроенная память (Гб): 32
							Фотокамера (Мп): 12 + 2 (двойная)
							Процессор: Qualcomm Snapdragon 439',
		  'photo' => 'https://cdn.svyaznoy.ru/upload/iblock/06b/86eee5cfc356ed4ab3462fdc841d7f98.jpg/resize/483x483/hq/',
		  'price' => 298.88
		]);

		DB::table('products')->insert([
		  'name' => 'Nokia',
		  'description' => 'Диагональ (дюйм): 5.71
							Разрешение (пикс): 1520x720
							Встроенная память (Гб): 16
							Фотокамера (Мп): 13
							Процессор: MediaTek MT6761 Helio A22',
		  'photo' => 'https://cdn.svyaznoy.ru/upload/iblock/13e/1559822818_nokia_2_2-spec-sheet-black.jpg/resize/483x483/hq/',
		  'price' => 999.99
		]);

    }
}

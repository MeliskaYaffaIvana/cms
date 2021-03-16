<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'name' => 'Pasta Capallini',
            'image' =>
            'https://www.delallo.com/shop/media/wysiwyg/Recipes/Puttanesca_Pasta_Olives_-10.jpg',
            'price' => '50.000'
        ]);
        DB::table('menu')->insert([
            'name' => 'Pasta Pillus',
            'image' =>
            'http://www.andiamopastaplus.com/wp-content/uploads/2020/05/lig-clams.jpg',
            'price' => '70.000'
        ]);
        DB::table('menu')->insert([
            'name' => 'Pasta Vermicelli',
            'image' =>
            'https://asset-a.grid.id//crop/0x60:937x659/700x0/photo/2020/06/27/3056015305.jpg',
            'price' => '60.000'
        ]);
        DB::table('menu')->insert([
            'name' => 'Pasta Fetucini',
            'image' =>
            'https://asset-a.grid.id//crop/0x0:0x0/700x0/photo/2020/06/27/4196660741.jpg',
            'price' => '80.000'
        ]);
        DB::table('menu')->insert([
            'name' => 'Pasta Spagheti',
            'image' =>
            'https://asset-a.grid.id//crop/218x1472:1690x2380/700x0/photo/2020/06/27/2737821594.jpg',
            'price' => '50.000'
        ]);

    }
}

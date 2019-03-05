<?php

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'laptops',
        ]);
         DB::table('categories')->insert([
            'id' => 2,
            'name' => 'softwares',
        ]);
         DB::table('categories')->insert([
            'id' => 3,
            'name' => 'printers',
        ]);
         DB::table('categories')->insert([
            'id' => 4,
            'name' => 'accessories',
        ]);
    }
}

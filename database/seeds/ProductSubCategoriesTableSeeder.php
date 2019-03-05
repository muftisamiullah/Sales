<?php

use Illuminate\Database\Seeder;

class ProductSubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert([
            'catId' => 1,
            'subName' => 'notebooks',
        ]);
         DB::table('sub_categories')->insert([
            'catId' => 1,
            'subName' => 'touch',
        ]);
        DB::table('sub_categories')->insert([
            'catId' => 2,
            'subName' => 'antivirus',
        ]);
         DB::table('sub_categories')->insert([
            'catId' => 2,
            'subName' => 'software',
        ]);
         DB::table('sub_categories')->insert([
            'catId' => 3,
            'subName' => 'wired',
        ]);
         DB::table('sub_categories')->insert([
            'catId' => 3,
            'subName' => 'wireless',
        ]);
         DB::table('sub_categories')->insert([
            'catId' => 4,
            'subName' => 'pendrives',
        ]);
         DB::table('sub_categories')->insert([
            'catId' => 4,
            'subName' => 'memorycards',
        ]);
    }
}

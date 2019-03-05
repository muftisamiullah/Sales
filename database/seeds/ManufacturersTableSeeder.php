<?php

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacturers')->insert([
            'id' => 1,
            'manufacturerName' => 'avast',
            'manufacturerCategoryId' => 3,
        ]);
         DB::table('manufacturers')->insert([
            'id' => 2,
            'manufacturerName' => 'hp',
            'manufacturerCategoryId' => 1,
        ]);
         DB::table('manufacturers')->insert([
            'id' => 3,
            'manufacturerName' => 'canon',
            'manufacturerCategoryId' => 6,
        ]);
         DB::table('manufacturers')->insert([
            'id' => 4,
            'manufacturerName' => 'samsung',
            'manufacturerCategoryId' => 8,
        ]);
         DB::table('manufacturers')->insert([
            'id' => 5,
            'manufacturerName' => 'avg',
            'manufacturerCategoryId' => 3,
        ]);
         DB::table('manufacturers')->insert([
            'id' => 6,
            'manufacturerName' => 'mcafee',
            'manufacturerCategoryId' => 3,
        ]);
         DB::table('manufacturers')->insert([
            'id' => 7,
            'manufacturerName' => 'kaspersky',
            'manufacturerCategoryId' => 3,
        ]);
         DB::table('manufacturers')->insert([
            'id' => 8,
            'manufacturerName' => 'lenovo',
            'manufacturerCategoryId' => 1,
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProductCategoriesTableSeeder::class,
            ProductSubCategoriesTableSeeder::class,
            ManufacturersTableSeeder::class,
            ProductsTableSeeder::class,
            UsersTableSeeder::class,
            ]);
        // factory(App\Category::class, 100)->create(); //can be removed
    }
    

}

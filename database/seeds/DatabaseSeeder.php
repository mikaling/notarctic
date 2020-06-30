<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;
use App\User;
use App\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        //factory(User::class, 5)->create();
        //factory(Category::class, 4)->create();
        //factory(Product::class, 10)->create();
        factory(Review::class, 20)->create();
    }
}

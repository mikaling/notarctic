<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/



$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id'=>$faker->numberBetween($min=1,$max=6),
        'name' => $faker->word,
        'price' => $faker->randomDigit,
        'description' =>$faker->realText(180),
        'quantity' => $faker->randomDigitNotNull,
        'brand' => Str::random(10),
        //'path' => $faker->image('public/storage/images',640, 480, null, false) ,
        'path' => $faker->image(public_path('/storage/images'), 640, 480, null, false),
    ];
});

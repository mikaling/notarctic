<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 5),
        'product_id' => $faker->numberBetween($min = 1, $max = 40),
        'rating' => $faker->numberBetween($min = 1, $max = 5),
        'title' => $faker->realText(50),
        'body'=> $faker->realText(255),
    ];
});

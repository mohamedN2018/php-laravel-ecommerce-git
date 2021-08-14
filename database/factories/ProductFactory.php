<?php

/** @var Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(8),
        'model' => $faker->sentence(4),
        'description' => $faker->sentence(15),
        'price' => $faker->numberBetween(50, 300),
        'image' => $faker->imageUrl($width = 640, $height = 480, 'technics'),
    ];
});




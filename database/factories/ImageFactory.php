<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    $fileName = $faker->numberBetween(1, 10);

    return [
        'path' => public_path("img/products/{$fileName}.jpg")
    ];
});

$factory->state(Image::class, 'user', function (Faker $faker) {
    $fileName = $faker->numberBetween(1, 6);

    return [
        'path' => public_path("img/users/{$fileName}.jpg")
    ];
});

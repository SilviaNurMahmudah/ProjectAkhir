<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Destinasi;
use Faker\Generator as Faker;

$factory->define(Destinasi::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->realText(2000),
        'jenis_wisata' => $faker->sentence(),
        'image' => $faker->imageUrl()
    ];
});

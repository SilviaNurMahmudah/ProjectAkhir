<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(),
        'title' => $faker->sentence(),
        'content' => $faker->realText(1500),
        'image' => $faker->imageUrl()
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(Library\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->words(rand(1, 7), true),
        'author' => $faker->name,
        'picture' => $faker->imageUrl(640, 480, null, null, 'book'),
        'description' => $faker->paragraph,
        'isbn' => $faker->isbn13,
    ];
});

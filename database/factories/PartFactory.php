<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Part;
use Faker\Generator as Faker;

$factory->define(Part::class, function (Faker $faker) {
    return [
        'content'=>$faker->sentence(10),
        'book_id'=>\App\Book::all()->random()->id
    ];
});

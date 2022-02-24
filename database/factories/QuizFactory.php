<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Quiz;
use Faker\Generator as Faker;

$factory->define(Quiz::class, function (Faker $faker) {
    return [
        'question' => $faker->word,
        'choice1' => $faker->text,
    ];
});

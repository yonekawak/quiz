<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Quiz;
use Faker\Generator as Faker;

$factory->define(Quiz::class, function (Faker $faker) {
    return [
        'question' => $faker->word,
        'answer_number' => $faker->numberBetween($min = 1,$max = 4),
        'choice1' => $faker->word,
        'choice2' => $faker->word,
        'choice3' => $faker->word,
        'choice4' => $faker->word,
    ];
});

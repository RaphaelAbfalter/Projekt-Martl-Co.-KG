<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Newsletter;

$factory->define(Newsletter::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'body' => $faker->text
    ];
});

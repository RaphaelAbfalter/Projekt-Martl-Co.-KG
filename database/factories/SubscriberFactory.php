<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Subscriber;

$factory->define(Subscriber::class, function (Faker $faker) {
    return [
        'email' => $faker->email
    ];
});

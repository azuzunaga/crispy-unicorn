<?php

use App\User;
use App\Color;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'fav_color_id' => function() {
            return Color::all()->random();
        },
    ];
});

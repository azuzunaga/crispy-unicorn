<?php

use App\Connection;
use App\User;
use Faker\Generator as Faker;

$factory->define(Connection::class, function (Faker $faker) {
    $userId = User::all()->random();
    $friendId = User::all()->random();
    // Make sure the ids are not the same
    while ($userId->id === $friendId->id) {
        $friendId = User::all()->random();
    }

    // Find the smallest and biggest id so that the originating id is always the smallest
    $minUser = min([$userId, $friendId]);
    $maxUser = max([$userId, $friendId]);

    return [
        'smaller_id' => $minUser,
        'bigger_id' => $maxUser,
    ];
});

<?php

use Faker\Generator as Faker;
use App\Message;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'message' => $faker->realText(100),
    ];
});

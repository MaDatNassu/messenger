<?php

use Faker\Generator as Faker;
use App\Message;

$factory->define(Message::class, function (Faker $faker) {
    return [
      'sender_id' => function(){
        return App\User::inRandomOrder()->pluck('id')->first();
      },
      'receiver_id' => function(){
        return App\User::inRandomOrder()->pluck('id')->first();
      },
      'thread_id' => 1,
      'message' => $faker->realText(100),
    ];
});

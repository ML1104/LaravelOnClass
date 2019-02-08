<?php

use Faker\Generator as Faker;

$factory->define(\App\Todos::class, function (Faker $faker) {
    return [
        'date' => $faker->dateTime(),
        'status' => $faker->randomElement(['complete', 'incomplete']),
        'title' => $faker->address,
        'body' => $faker->text()

    ];
});

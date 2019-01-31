<?php

use Faker\Generator as Faker;


$factory->define(\App\Cat::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'age' => $faker->numberBetween(1, 15),
        'gender' => $faker->randomElement(['male', 'female'])
    ];
});

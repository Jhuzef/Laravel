<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array = array('Ford', 'Honda', 'Toyota')),
        'Model' => $faker->randomElement($array = array('Coupe', 'Sedan', 'Van')),
        'Year' => $faker->randomElement($array = array( 2012, 2013, 2018)),
    ];
});

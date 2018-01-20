<?php

use Faker\Generator as Faker;
use App\Customer;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->country,
        'mobile_number' => $faker->numberBetween(1000000,23434435),
        'age' => $faker->numberBetween(15,50),
        'type' => $faker->numberBetween(0,1)
    ];
});

<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(App\Host::class, function (Faker $faker) {
    return [
        "firstname"=> $faker->firstName(),
        "lastname"=> $faker->lastName(),
        "email"=> $faker->email(),
        "password"=> Hash::make("test")
    ];
});

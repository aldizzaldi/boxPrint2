<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
        'password' => $faker->regexify('[A-Za-z0-9]{20}'),
        'email' => $faker->email,
        'alamat' => $faker->address,
    ];
});

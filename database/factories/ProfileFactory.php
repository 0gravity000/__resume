<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        //
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'first_name_kana' => $faker->firstKanaName,
        'last_name_kana' => $faker->lastKanaName,
        'birth_year' => $faker->year($max = 'now'),
        'birth_month' => $faker->month($max = 'now'),
        'birth_day' => $faker->dayOfMonth($max = 'now'),
        'tel' => $faker->phoneNumber,
        'cellphone' => $faker->phoneNumber,
        'postcode' => $faker->postcode,
        'adress_city' => $faker->city,
        'adress_other' => $faker->streetName,
    ];
});

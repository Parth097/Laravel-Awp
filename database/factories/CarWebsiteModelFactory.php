<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CarWebsiteModel;
use Faker\Generator as Faker;
use Faker\Provider\Fakecar;

$factory->define(CarWebsiteModel::class, function (Faker $faker) {

    $faker->addProvider(new Fakecar($faker)); //faker car library used to add random data for testing purposes
    $v = $faker->vehicleArray();

    return [
        'user_id'           => App\User::all()->random()->id,
        'u_name'           => App\User::all()->random()->name,
        'type'              => $faker->vehicleType,
        'fuel'              => $faker->vehicleFuelType,
        'brand'             => $v['brand'],
        'model'             => $v['model'],
        'year'              => $faker->biasedNumberBetween(1998,2017, 'sqrt'),
        'likes' => $faker->numberBetween(-20, 150),
    ];
});



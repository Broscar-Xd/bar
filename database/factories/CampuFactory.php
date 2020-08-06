<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Campu;
use Faker\Generator as Faker;


$factory->define(Campu::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text,
        'direccion' => $faker->text,
    ];
});

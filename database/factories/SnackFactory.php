<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Snack;
use Faker\Generator as Faker;
use App\Bar;


$factory->define(Snack::class, function (Faker $faker) {
    return [
        'bar_id' => $faker->randomDigit,
        'nombre' => $faker->text,
        'precio' => $faker->randomFloat(),
        'disponible' => $faker->text,
        //bar BelongsTo Bar bar_id
    ];
});

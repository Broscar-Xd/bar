<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Menu;
use Faker\Generator as Faker;
use App\Bar;


$factory->define(Menu::class, function (Faker $faker) {
    return [
        'bar_id' => $faker->randomDigit,
        'nombre' => $faker->text,
        'precio' => $faker->randomFloat(),
        'disponible' => $faker->text,
        'descripcion' => $faker->optional()->text(1024),
        //bar BelongsTo Bar bar_id
    ];
});

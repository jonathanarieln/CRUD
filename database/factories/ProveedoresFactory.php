<?php

use Faker\Generator as Faker;

$factory->define(\App\Proveedor::class, function (Faker $faker) {
    return [
        'Nombre' => $faker->company,
        'Codigo' => $faker->unique()->randomNumber(5),
        'RTN' => 'RTN'.$faker->unique()->randomNumber(5).$faker->unique()->randomNumber(5),
    ];
});

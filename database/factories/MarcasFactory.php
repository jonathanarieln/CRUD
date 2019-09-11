<?php

use Faker\Generator as Faker;

$factory->define(\App\Marca::class, function (Faker $faker) {
    return [
        'Nombre' => $faker->company,
        'Codigo' => $faker->unique()->randomNumber(5),
        'ProveedorId' => $faker->randomNumber(1)+1,
    ];
});

<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Notas;
use Faker\Generator as Faker;

$factory->define(Notas::class, function (Faker $faker) {
    return [
        'nota1' => $faker->nota1,
        'nota2' => $faker->nota2,
        'final' => $faker->final
    ];
});

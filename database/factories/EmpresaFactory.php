<?php

use Faker\Generator as Faker;
use App\Empresa;

$factory->define(Empresa::class, function (Faker $faker) {
    return [
        'razon_Social' => substr($faker->sentence(3),0,-1),
        'ruc' => $faker->randomNumber(9) . $faker->randomNumber(2),
        'mision' => $faker->text(20),
        'vision' => $faker->text(20),
        'factor_Diferenciador' => $faker->text(50),
        'objetivos_Estrategicos' => $faker->text(50),
    ];
});

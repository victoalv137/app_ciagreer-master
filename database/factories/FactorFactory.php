<?php

use Faker\Generator as Faker;
use App\Factor;

$factory->define(Factor::class, function (Faker $faker) {
    static $number=1;
    static $tipo_factores= ['D','A','F','O'];
    return [
        'descripcion' => 'Factor '. $number++,
        'factor_Cod' => $tipo_factores[$number%4]. ($number-1),
        // 'tipo_Factor' => $faker->randomElement('F','O','D','A'),
        'tipo_Factor' => $tipo_factores[$number%4],
    ];
});

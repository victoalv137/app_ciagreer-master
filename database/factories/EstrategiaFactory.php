<?php

use Faker\Generator as Faker;
use App\Estrategia;

$factory->define(Estrategia::class, function (Faker $faker) {
    static $number=1;
    static $f_internos= ['D','F'];
    static $f_externos= ['O','A'];
    return [
        'descripcion' => 'Estrategia ' . $number++,
        'estrategia_Cod' => $f_internos[($number/2)%2] . $f_externos[($number%2)]. ($number-1),
        'tipo_Estrategia' => $f_internos[($number/2)%2] . $f_externos[($number%2)],
    ];
});

<?php

use Faker\Generator as Faker;
use App\EmpresaImagen;


$factory->define(EmpresaImagen::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl(250,250),
    ];
});

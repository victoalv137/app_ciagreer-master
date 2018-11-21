<?php

use Faker\Generator as Faker;
use App\Foda;

$factory->define(Foda::class, function (Faker $faker) {
    return [
        'descripcion' => substr($faker->sentence(3),0,-1)
    ];
});

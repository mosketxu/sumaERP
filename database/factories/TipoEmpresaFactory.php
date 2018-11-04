<?php

use Faker\Generator as Faker;

$factory->define(App\TipoEmpresa::class, function (Faker $faker) {
    return [
	    'name' => $faker->word,
    ];
});

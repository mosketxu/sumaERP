<?php

use Faker\Generator as Faker;

$factory->define(App\Contacto::class, function (Faker $faker) {
    return [
        'departamento_id'=>\App\Departamento::all()->random()->id,
        'esfacturacion' => '0',
        'name' => $faker->firstName(),
        'lastname'=>$faker->lastName,
        'email1' => $faker->safeEmail,
        'telefono1' => $faker->phoneNumber,
    ];
});

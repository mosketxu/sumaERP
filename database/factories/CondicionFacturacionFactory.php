<?php

use Faker\Generator as Faker;

$factory->define(App\CondicionFacturacion::class, function (Faker $faker) {
    return [
        'diafactura'=>'1',
        'diavencimiento'=>$faker->randomElement([10,25]),
        'modopago_id' => \App\ModoPago::all()->random()->id,
        'periodopago_id' => \App\PeriodoPago::all()->random()->id,
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\Banco::class, function (Faker $faker) {
    return [
        'name' => 'Bank ' .$faker->company,
        'iban' => $faker->bankAccountNumber,
        'principal'=>'1',
    ];
});

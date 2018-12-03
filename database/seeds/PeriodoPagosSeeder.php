<?php

use Illuminate\Database\Seeder;

class PeriodoPagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodo_pagos')->delete();

        DB::table('periodo_pagos')->insert([
            ['perpago3' => 'Men', 'periodopago' => 'Mensual'],
            ['perpago3' => 'Tri', 'periodopago' => 'Trimestral'],
            ['perpago3' => 'Anu', 'periodopago' => 'Anual'],
            ['perpago3' => 'One', 'periodopago' => 'One Shot'],
            ['perpago3' => 'NoD', 'periodopago' => 'No definido'],
        ]);
    }
}

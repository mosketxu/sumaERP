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
            ['name'=>'Mensual'],
            ['name'=>'Trimestral'],
            ['name'=>'Anual'],
            ['name'=>'One Shot'],
            ['name'=>'No definida'],
        ]);            
    }
}

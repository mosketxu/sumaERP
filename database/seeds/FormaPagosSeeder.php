<?php

use Illuminate\Database\Seeder;

class FormaPagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forma_pagos')->delete();

        DB::table('forma_pagos')->insert([
            ['forpago3' => 'Dom', 'formapago' => 'Domiciliado'],
            ['forpago3' => 'Tra', 'formapago' => 'Transferencias ES50 1234 5678 9101 1213'],
            ['forpago3' => 'NoD', 'formapago' => 'No definido'],
        ]);
    }
}

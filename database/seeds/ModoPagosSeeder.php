<?php

use Illuminate\Database\Seeder;

class ModoPagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modo_pagos')->delete();

        DB::table('modo_pagos')->insert([
            ['name'=>'Domiciliado'],
            ['name'=>'Trasnferencias ES50 1234 5678 9101 1213'],
        ]);            
    }
}

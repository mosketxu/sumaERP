<?php

use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->delete();

        DB::table('departamentos')->insert([
            ['name'=>'Marketing'],
            ['name'=>'Contabilidad'],
            ['name'=>'Administracion'],
            ['name'=>'Otros'],
        ]);            
    }
}

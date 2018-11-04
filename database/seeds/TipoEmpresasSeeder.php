<?php

use Illuminate\Database\Seeder;

class TipoEmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\TipoEmpresa::class, 1)->create(['name' => 'cliente']);
        factory(\App\TipoEmpresa::class, 1)->create(['name' => 'proveedor']);
        factory(\App\TipoEmpresa::class, 1)->create(['name' => 'clienteprovedor']);
        factory(\App\TipoEmpresa::class, 1)->create(['name' => 'interno']);
        factory(\App\TipoEmpresa::class, 1)->create(['name' => 'otros']);
    }
}

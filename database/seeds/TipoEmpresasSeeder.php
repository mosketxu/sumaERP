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
        factory(\App\TipoEmpresa::class, 1)->create(['tipoempresa' => 'cliente']);
        factory(\App\TipoEmpresa::class, 1)->create(['tipoempresa' => 'proveedor']);
        factory(\App\TipoEmpresa::class, 1)->create(['tipoempresa' => 'clienteprovedor']);
        factory(\App\TipoEmpresa::class, 1)->create(['tipoempresa' => 'interno']);
        factory(\App\TipoEmpresa::class, 1)->create(['tipoempresa' => 'otros']);
    }
}

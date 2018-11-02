<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tipoempresa_id');
            $table->foreign('tipoempresa_id')->references('id')->on('tipo_empresas');
            $table->string('direccion')->nullable();
            $table->string('codpostal')->nullable();
            $table->string('localidad')->nullable();
            $table->unsignedInteger('provincia_id')->nullable();
            $table->foreign('provincia_id')->references('id')->on('provincias');
            $table->string('pais_id',2)->nullable();
            $table->foreign('pais_id')->references('id')->on('pais');
            $table->string('cifnif')->nullable();
            $table->string('email')->nullable();
            $table->string('web')->nullable();
            $table->string('idioma',2)->default('es');
            $table->string('cuentacontable')->nullable();
            $table->integer('marta')->default('100');
            $table->integer('susana')->default('0');
            $table->boolean('estado')->default('1');
            $table->string('observaciones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}

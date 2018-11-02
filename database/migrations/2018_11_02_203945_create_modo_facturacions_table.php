<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModoFacturacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modo_facturacions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->integer('dia');
            $table->unsignedInteger('condicionpago_id');
            $table->foreign('condicionpago_id')->references('id')->on('condicion_pagos');
            $table->unsignedInteger('periodopago_id');
            $table->foreign('periodopago_id')->references('id')->on('periodo_pagos');
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
        Schema::dropIfExists('modo_facturacions');
    }
}

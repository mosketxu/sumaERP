<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pus', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->string('name');
            $table->string('ce');
            $table->string('us');
            $table->string('pw');
            $table->string('observaciones');
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
        Schema::dropIfExists('pus');
    }
}

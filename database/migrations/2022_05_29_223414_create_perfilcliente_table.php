<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilclienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {/*
        Schema::create('perfilcliente', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    */
        Schema::create('perfilclientes', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email')->unique();
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
        Schema::dropIfExists('perfilcliente');
    }
}

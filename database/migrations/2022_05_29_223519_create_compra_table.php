<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {/*
        Schema::create('compra', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    */
        Schema::create('compras', function (Blueprint $table) {
            $table->id('id_compra');
            $table->unsignedBigInteger('cliente_id');
            //$table->foreign('cliente_id')->references('id_cliente')->on('perfilcliente');
            $table->unsignedBigInteger('pago_id');
            //$table->foreign('pago_id')->references('id_pago')->on('pago');
            $table->string('estado');
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
        Schema::dropIfExists('compra');
    }
}

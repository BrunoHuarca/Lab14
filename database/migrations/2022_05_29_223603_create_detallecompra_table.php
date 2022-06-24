<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallecompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallecompras', function (Blueprint $table) {
            /*
            $table->id();
            $table->timestamps();
            */
            $table->id('id_detalle');
            $table->unsignedBigInteger('compra_id');
            //$table->foreign('compra_id')->references('id_compra')->on('compra');
            $table->unsignedBigInteger('producto_id');
            //$table->foreign('producto_id')->references('id_producto')->on('producto');
            $table->integer('cantidad');
            $table->decimal('preciocompra');
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
        Schema::dropIfExists('detallecompra');
    }
}

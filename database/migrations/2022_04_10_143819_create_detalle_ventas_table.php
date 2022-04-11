<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->bigIncrements('id_detalleVenta');
            $table->unsignedBigInteger('venta_id');
            $table->foreign('venta_id')->references('id_venta')->on('ventas');
            $table->unsignedBigInteger('libro_id');
            $table->foreign('libro_id')->references('id_libro')->on('libros');
            $table->integer('cantidad');
            $table->double('total');
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
        Schema::dropIfExists('detalle_ventas');
    }
}

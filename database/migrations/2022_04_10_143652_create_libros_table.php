<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->bigIncrements('id_libro');
            $table->unsignedBigInteger('autor_id');
            $table->foreign('autor_id')->references('id_autor')->on('autors');
            $table->unsignedBigInteger('gen_id');
            $table->foreign('gen_id')->references('id_gen')->on('generos');
            $table->string('titulo');
            $table->date('fechaEdicion');
            $table->double('costo');
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
        Schema::dropIfExists('libros');
    }
}

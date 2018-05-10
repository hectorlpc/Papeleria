<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre');
            $table->string('stock');
            $table->integer('Marca')->unsigned();
            $table->double('precio_compra');
            $table->double('precio_venta');
            $table->string('Desc');
            $table->integer('id_tipo')->unsigned();
            $table->timestamps();
            $table->foreign('Marca')->references('id')->on('marca');
            $table->foreign('id_tipo')->references('id')->on('tipo_producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_producto');
    }
}

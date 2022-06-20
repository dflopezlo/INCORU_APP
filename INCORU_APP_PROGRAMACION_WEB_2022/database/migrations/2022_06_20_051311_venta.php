<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Venta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
//            $table->codigoVenta();
            $table->unsignedBigInteger('cedulaUsuario');
            $table->unsignedBigInteger('codigoProd');
            $table->integer('cantidad');
            $table->decimal('total');
            $table->date('fecha');
            $table->foreign('cedulaUsuario')->references('cedula')->on('usuario');
            $table->foreign('codigoProd')->references('codigo')->on('producto');
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
        Schema::dropIfExists('venta');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionHasPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacion_has_pedido', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_solicitud_pedido');
            $table->unsignedBigInteger('cotizacion_id');
            $table->unsignedBigInteger('pedido_id');
            $table->foreign('cotizacion_id')->references('id')->on('cotizacion')->onDelete('cascade');
            $table->foreign('pedido_id')->references('id')->on('pedido')->onDelete('cascade');
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
        Schema::dropIfExists('cotizacion_has_pedido');
    }
}

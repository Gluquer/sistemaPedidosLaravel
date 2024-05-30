<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTextilHasPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_textil_has_pedido', function (Blueprint $table) {
            $table->id();
            $table->decimal('cantidad');
            $table->unsignedBigInteger('producto_textil_id');
            $table->unsignedBigInteger('pedido_id');
            $table->foreign('producto_textil_id')->references('id')->on('productos')->onDelete('cascade');
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
        Schema::dropIfExists('producto_textil_has_pedido');
    }
}

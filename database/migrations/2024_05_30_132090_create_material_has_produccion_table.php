<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialHasProduccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_has_produccion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produccion_id');
            $table->unsignedBigInteger('material_id');
            $table->foreign('produccion_id')->references('id')->on('produccion')->onDelete('cascade');
            $table->foreign('material_id')->references('id')->on('material')->onDelete('cascade');
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
        Schema::dropIfExists('material_has_produccion');
    }
}

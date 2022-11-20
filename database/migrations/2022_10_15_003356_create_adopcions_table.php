<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adopcions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('correo')->unique()->nullable();
            $table->string('telefono');
            $table->unsignedBigInteger('especie_id');
            $table->foreign('especie_id')
                  ->references('id')->on('especies')
                  ->onDelete('cascade');
                
            $table->unsignedBigInteger('fundacion_id');
            $table->foreign('fundacion_id')
                  ->references('id')->on('fundaciones')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('adopcions');
    }
};

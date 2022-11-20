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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('fotoPerfil')->nullable();
            $table->string('email')->unique();
            $table->string('role')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('tipoIdentificacion');
            $table->string('numeroIdentificacion');
            $table->string('direccion');
            $table->date('fechaNacimiento');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

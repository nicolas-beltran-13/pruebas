<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->integer('numIde');
            $table->string('nombre');
            $table->string('apellidos');
            $table->date('fechaNacimiento');
            $table->integer('edad');
            $table->string('direccion', 25);
            $table->integer('telefono');
            $table->string('correo');
            $table->string('contraseña', 20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
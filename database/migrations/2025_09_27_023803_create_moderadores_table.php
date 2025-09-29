<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('moderadores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->string('registroacciones', 25);
            $table->string('permisosmoderacion', 25);
            $table->string('normas', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('moderadores');
    }
};
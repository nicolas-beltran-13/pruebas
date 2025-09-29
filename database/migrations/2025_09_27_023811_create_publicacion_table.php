<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('publicacion', function (Blueprint $table) {
            $table->id();
            $table->date('fechaPublicacion');
            $table->string('Estados', 20);
            $table->string('nombrepublicacion');
            $table->string('archivos', 100);
            $table->text('descripcion');
            $table->string('reacciones', 40);
            $table->string('comentarios', 100);
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('moderador_id')->constrained('moderadores');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('publicaciones');
    }
};
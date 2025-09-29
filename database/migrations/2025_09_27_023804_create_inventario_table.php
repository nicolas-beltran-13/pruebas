<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {
            $table->id();
            $table->foreignId('administrador_id')->constrained('administradores');
            $table->foreignId('producto_id')->constrained('productos');
            $table->string('tipoMovimiento', 50);
            $table->date('fechaMovimiento');
            $table->integer('numeroFactura');
            $table->string('proveedor', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventario');
    }
};
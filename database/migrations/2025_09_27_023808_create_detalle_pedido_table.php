<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('detalle_pedido', function (Blueprint $table) {
            $table->foreignId('pedido_id')->constrained('pedidos');
            $table->foreignId('producto_id')->constrained('productos');
            $table->integer('cantidad_producto');
            $table->decimal('precio_unitario_venta', 10, 2);
            $table->primary(['pedido_id', 'producto_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalle_pedido');
    }
};
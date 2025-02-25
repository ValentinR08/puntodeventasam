<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('id_venta');
            $table->datetime('fecha_hora');
            $table->foreignId('id_cliente')->references('id')->on('users');//error de fer a una referencia a una tabla que no existe
            $table->string('metodo_pago');
            $table->string('estado');
            $table->integer('impuestos');
            $table->decimal('propina');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropifExists('ventas');
    }
};

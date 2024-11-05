<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('deposito', function (Blueprint $table) {
            $table->id('ideposito'); // Primary Key
            $table->string('numero_deposito')->unique(); // Número de depósito
            $table->date('fecha_deposito'); // Fecha del depósito
            $table->decimal('monto', 10, 2); // Monto del depósito
            $table->string('imagen')->nullable(); // Imagen del depósito (campo opcional)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('deposito');
    }
};

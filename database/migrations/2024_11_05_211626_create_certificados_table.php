<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('certificados', function (Blueprint $table) {
            $table->id('idcertificado'); // Primary Key
            $table->enum('estado', ['emitido', 'pendiente', 'cancelado']); // Estado del certificado
            $table->unsignedBigInteger('idinscripcion'); // Foreign Key
            $table->timestamps();

            // Definir la clave foránea
            $table->foreign('idinscripcion')->references('idincripcion')->on('inscripcion')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('certificados');
    }
};

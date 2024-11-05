<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detalle_curso', function (Blueprint $table) {
            $table->id('iddetalle_curso'); // Primary Key
            $table->text('descripcion');
            $table->enum('estado', ['activo', 'inactivo']); // Estado del detalle
            $table->unsignedBigInteger('idcurso'); // Foreign Key
            $table->timestamps();

            // Definir la clave foránea
            $table->foreign('idcurso')->references('idcurso')->on('curso')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detalle_curso');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->id('idcurso'); // Primary Key
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('costo', 8, 2); // Costo con formato decimal
            $table->integer('duracion'); // Duración en horas
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('modalidad'); // Presencial, online, etc.
            $table->string('lugar'); // Lugar de impartición
            $table->time('hora'); // Hora de inicio del curso
            $table->string('foto')->nullable(); // Foto del curso, campo opcional
            $table->enum('estado', ['activo', 'inactivo']); // Estado del curso
            $table->unsignedBigInteger('idarea'); // Foreign Key
            $table->unsignedBigInteger('idexpositor'); // Foreign Key
            $table->timestamps();

            // Definir las claves foráneas
            $table->foreign('idarea')->references('idarea')->on('area')->onDelete('cascade');
            $table->foreign('idexpositor')->references('idexpositor')->on('expositor')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('curso');
    }
};

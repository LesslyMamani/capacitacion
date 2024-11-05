<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id('idpersona'); // Primary Key
            $table->string('CI'); // Cédula de identidad
            $table->string('RU'); // Registro único
            $table->string('nombres'); // Nombres
            $table->string('apellido_paterno'); // Apellido paterno
            $table->string('apellido_materno'); // Apellido materno
            $table->string('celular'); // Número de celular
            $table->unsignedBigInteger('idtip_inscrito'); // Foreign Key
            $table->timestamps();

            // Definir la clave foránea
            $table->foreign('idtip_inscrito')->references('idtipo_inscrito')->on('tipo_inscrito')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};

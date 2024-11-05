<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inscripcion', function (Blueprint $table) {
            $table->id('idincripcion'); // Primary Key
            $table->date('fecha_inscripcion'); // Fecha de inscripción
            $table->enum('estado_pago', ['pendiente', 'pagado', 'cancelado']); // Estado del pago
            $table->unsignedBigInteger('idcurso'); // Foreign Key
            $table->unsignedBigInteger('idpersona'); // Foreign Key
            $table->unsignedBigInteger('ideposito'); // Foreign Key
            $table->timestamps();

            // Definir las claves foráneas
            $table->foreign('idcurso')->references('idcurso')->on('curso')->onDelete('cascade');
            $table->foreign('idpersona')->references('idpersona')->on('personas')->onDelete('cascade');
            $table->foreign('ideposito')->references('ideposito')->on('deposito')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inscripcion');
    }
};

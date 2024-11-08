<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tipo_inscrito', function (Blueprint $table) {
            $table->id('idtipo_inscrito'); // Primary Key
            $table->string('tipo');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tipo_inscrito');
    }
};

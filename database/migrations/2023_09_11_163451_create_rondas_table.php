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
        Schema::create('rondas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pregunta_id')->constrained('preguntas')->onDelete('cascade');
            $table->foreignId('juego_id')->constrained('juegos')->onDelete('cascade');
            $table->foreignId('equipo_id')->constrained('equipos')->onDelete('cascade');
            $table->timestamp('fecha_hora');
            $table->boolean('estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rondas');
    }
};

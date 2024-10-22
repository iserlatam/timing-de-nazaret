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
        Schema::create('time_entries', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nombre_entrada')->nullable();
            $table->time('hora_inicio')->nullable() ;
            $table->time('hora_final')->nullable();
            $table->time('total_horas')->nullable();
            $table->foreignId('etiqueta'); 
            $table->foreignId('proyecto'); 
            $table->foreignId('usuario')->nullable(); 
            $table->dateTime('fecha_creacion')->nullable();
            $table->dateTime('fecha_modificacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('time_entries');
    }
};

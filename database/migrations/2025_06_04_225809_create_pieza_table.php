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
        Schema::create('pieza', function (Blueprint $table) {
            $table->id();
            $table->string('pieza');
            $table->decimal('peso_teorico', 8, 2);
            $table->decimal('peso_real', 8, 2)->nullable();
            $table->enum('estado', ['Pendiente', 'Fabricado']);
            $table->foreignId('proyecto_id')->constrained();
            $table->foreignId('bloque_id')->constrained();
            $table->timestamp('fecha_registro')->nullable();
            $table->string('registrado_por');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pieza');
    }
};

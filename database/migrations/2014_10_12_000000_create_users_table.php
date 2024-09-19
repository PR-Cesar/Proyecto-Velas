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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_usuario'); // ID autoincremental
            $table->string('nombre'); // Nombre del usuario
            $table->string('num_colaborador')->unique(); // Numero de colaborador
            $table->string('contraseña'); // Contraseña
            $table->string('rol'); // Rol del usuario
            $table->timestamps(); // Crea created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

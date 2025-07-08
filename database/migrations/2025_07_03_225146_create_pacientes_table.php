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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_paciente')->nullable()->constrained('tipo_pacientes')->nullOnDelete();
            $table->string('nombre', 100);
            $table->date('fecha_nacimiento')->nullable();
            $table->enum('genero', ['masculino', 'femenino', 'otro']);
            $table->string('matricula', 20)->unique()->nullable();
            $table->string('carrera', 100)->nullable();
            $table->string('grupo', 20)->nullable();
            $table->string('semestre', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};

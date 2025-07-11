<?php

namespace Database\Seeders;

use App\Models\TipoPaciente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoPacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoPaciente::insert([
            ['nombre' => 'Estudiante', 'descripcion' => 'Alumno de la institución', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Docente', 'descripcion' => 'Docente de la institución', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Empleado', 'descripcion' => 'Personal administrativo', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

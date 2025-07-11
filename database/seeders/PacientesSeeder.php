<?php

namespace Database\Seeders;

use App\Models\Paciente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Paciente::insert([
            [
                'tipo_paciente' => 1,
                'nombre' => 'Carlos Pérez',
                'fecha_nacimiento' => '2002-05-12',
                'genero' => 'masculino',
                'matricula' => '20201234',
                'carrera' => 'Ingeniería en Sistemas',
                'grupo' => '6A',
                'semestre' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

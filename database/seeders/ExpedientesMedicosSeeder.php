<?php

namespace Database\Seeders;

use App\Models\ExpedientesMedico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpedientesMedicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExpedientesMedico::create([
            'paciente_id' => 1,
            'usuario_id' => 2,
            'fecha_evento' => now()->toDateString(),
            'descripcion' => 'Dolor de cabeza, se administró paracetamol',
            'producto_utilizado' => 'Paracetamol',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Reporte;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reporte::create([
            'usuario_id' => 1,
            'tipo_reporte' => 'uso',
            'descripcion' => 'Reporte mensual de medicamentos utilizados',
        ]);
    }
}

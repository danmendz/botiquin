<?php

namespace Database\Seeders;

use App\Models\Movimiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovimientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movimiento::create([
            'inventario_id' => 1,
            'usuario_id' => 1,
            'tipo' => 'salida',
            'cantidad' => 5,
            'observaciones' => 'Uso en atención médica',
        ]);
    }
}

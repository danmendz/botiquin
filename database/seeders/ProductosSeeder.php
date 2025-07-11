<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::insert([
            ['nombre' => 'Alcohol', 'descripcion' => 'Antiséptico', 'unidad_medida' => 'ml', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Gasas', 'descripcion' => 'Paquete de gasas estériles', 'unidad_medida' => 'paquete', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Paracetamol', 'descripcion' => 'Tabletas 500mg', 'unidad_medida' => 'tableta', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

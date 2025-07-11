<?php

namespace Database\Seeders;

use App\Models\Inventario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inventario::insert([
            [
                'botiquin_id' => 1,
                'producto_id' => 1,
                'cantidad' => 50,
                'fecha_caducidad' => now()->addYear(),
                'fecha_registro' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

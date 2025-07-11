<?php

namespace Database\Seeders;

use App\Models\Botiquine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BotiquinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Botiquine::insert([
            ['nombre' => 'Botiquín Central', 'ubicacion' => 'Edificio A, planta baja', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Botiquín Laboratorios', 'ubicacion' => 'Edificio C, segundo piso', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

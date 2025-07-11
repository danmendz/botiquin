<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TipoPacientesSeeder::class,
            UserSeeder::class,
            BotiquinesSeeder::class,
            ProductosSeeder::class,
            PacientesSeeder::class,
            InventariosSeeder::class,
            MovimientosSeeder::class,
            ExpedientesMedicosSeeder::class,
            ReportesSeeder::class,
        ]);
    }

}

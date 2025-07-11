<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Admin General',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'rol' => 'administrador',
            ],
            [
                'name' => 'Enfermera Juana',
                'email' => 'juana@gmail.com',
                'password' => Hash::make('password'),
                'rol' => 'personal_medico',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Equipo;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear 10 equipos aleatorios
        Equipo::factory(10)->create();

        // Crear 1 equipo manual
        Equipo::factory()->create([
            'nombre' => 'Kalid',
            'user_id' => User::inRandomOrder()->first()->id,
            'cantidadjugadores' => 15,
            'categoria' => 'Adulto',
        ]);
    }


}

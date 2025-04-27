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

        Equipo::factory(10)->create();


        Equipo::factory()->create([
            'nombre' => 'Kalid',
            'user_id' => User::inRandomOrder()->first()->id,
            'cantidadjugadores' => 15,
            'categoria' => 'Adulto',
        ]);
    }


}

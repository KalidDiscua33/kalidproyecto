<?php

namespace Database\Factories;
use App\Models\User;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipo>
 */
class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Equipo::class;
    public function definition(): array
    {
        return [

            'nombre' => $this->faker->unique()->company,
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'categoria' => $this->faker->randomElement(['Infantil', 'Juvenil', 'Adulto']),
            'cantidadjugadores' => $this->faker->numberBetween(5, 15),
        ];
    }
}

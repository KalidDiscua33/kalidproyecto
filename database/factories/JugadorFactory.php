<?php

namespace Database\Factories;
use App\Models\Equipo;
use App\Models\Jugador;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jugador>
 */
class JugadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Jugador::class;
    public function definition(): array
    {


        return [
            'nombre' => $this->faker->name,
            'equipo_id' => Equipo::inRandomOrder()->first()->id,
            'posicion' => $this->faker->numberBetween(1, 10),
            'edad' => $this->faker->randomNumber(),


        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake() -> name(),
            'tipo_tramite' => fake() -> randomElement(['PLATAFORMA','VENTANILLA']),
            'fecha'=>fake()->dateTimeBetween('-1 years','now'),
            'estado' =>fake()->randomElement([0,1])
        ];
    }
}

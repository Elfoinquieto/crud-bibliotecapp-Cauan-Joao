<?php

namespace Database\Factories;

use App\Models\Autor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Autor>
 */
class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->name(),
            'age' => fake()->numberBetween(20,100),
            'nationality' => fake('pt_BR')->country(),
            'literary_genre' => fake()->randomElement(['Fantasia','Romance', 'Terror', 'Poesia', 'Aventura', '']),
        ];
    }
}

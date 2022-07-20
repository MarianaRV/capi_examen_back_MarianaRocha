<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Domicilio>
 */
class DomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->name(),
            'domicilio' => fake()->address(),
            'numero_exterior' => fake()->randomNumber(),
            'colonia' => fake()->streetAddress(),
            'cp' => fake()->randomNumber(5),
            'ciudad' => fake()->city()
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Players>
 */
class PlayersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'club_id' => Club::factory(),
            'position' => 'Unknow',
            'age' => fake()->numberBetween(17, 40)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function position(): static
    {
        return $this->state(fn(array $attributes) => [
            'position' => 'manager',
        ]);
    }
}

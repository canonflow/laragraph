<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Laravel', 'Symfony', 'Vue.js', 'React', 'Angular']) . ' ' . fake()->randomElement(['Meetup', ' Conference', 'Workshop']),
            'city' => fake()->randomElement(['New York', 'Paris', 'London', 'Berlin', 'Amsterdam']),
            'venue' => fake()->randomElement(['Google', 'Microsoft', 'Apple', 'Meta', 'Amazon']) . ' '
                        . fake()->randomElement(['HQ', 'Office', 'Campus']),
            'date' => fake()->dateTimeThisMonth(),
            'online' => fake()->boolean
        ];
    }
}

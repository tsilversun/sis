<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'firstname' => $this->faker->name(),
            'lastname' => $this->faker->name(),
            'gender' => $this->faker->randomElements(['male', 'female']),
            'birth' => $this->faker->date(),
            'email' => $this->faker->email(),
            'location' => $this->faker->address()
        ];
    }
}

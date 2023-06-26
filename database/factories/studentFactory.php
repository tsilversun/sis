<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class studentFactory extends Factory
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
            'Firstname' => $this->faker->name(),
            'Middlename' => $this->faker->firstName(),
            'Lastname' => $this->faker->lastName(),
            'Gender' => $this->faker->randomElement(['male', 'female']),
            'Birthday' => $this->faker->dateTimeThisCentury()->format('Y-m-d'),
            'Email' => $this->faker->email(),
            'Address' => $this->faker->address(),

        ];
    }
}

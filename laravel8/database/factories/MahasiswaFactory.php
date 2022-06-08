<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nim' => $this->faker->randomDigit(),
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'email' => $this->faker->email()
        ];
    }
}
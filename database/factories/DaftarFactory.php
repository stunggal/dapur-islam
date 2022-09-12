<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\daftar>
 */
class DaftarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'nim' => $this->faker->numberBetween(111111111111, 999999999999),
            'prodi' => $this->faker->randomElement(['pai', 'pba', 'tbi', 'saa', 'afi', 'iqt', 'pm', 'hes', 'mnj', 'ei', 'agro', 'ti', 'tip', 'hi', 'ilkom', 'kkk', 'farmasi', 'gizi']),
            'semester' => $this->faker->randomElement(['1', '3', '5', '7', '9+']),
            'status' => $this->faker->randomElement(['approved', 'pending', 'rejected']),
        ];
    }
}

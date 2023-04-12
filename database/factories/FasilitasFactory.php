<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FasilitasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'kode_gedung' => $this->faker->unique()->randomNumber(10),
            // 'nama_gedung' => $this->faker->name,
            // 'kapasitas' => $this->faker->name,
            // 'lokasi' => $this->faker->randomDigitNotNull,
            // 'kondisi' => $this->faker->randomElement(['A', 'B', 'C']),
        ];
    }
}

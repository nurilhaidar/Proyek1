<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Oki>
 */
class OkiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kode' => $this->faker->unique()->randomNumber(10),
            'nama' => $this->faker->name,
            'ketua_jurusan' => $this->faker->name,
            'jml_prodi' => $this->faker->randomDigitNotNull,
            'akreditasi' => $this->faker->randomElement(['A', 'B', 'C']),
        ];
    }
}

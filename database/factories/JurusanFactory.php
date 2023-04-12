<?php

namespace Database\Factories;

use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jurusan>
 */
class JurusanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Jurusan::class;

    public function definition()
    {
        return [
            'kode' => $this->faker->unique()->randomNumber(5),
            'nama' => $this->faker->name,
            'ketua_jurusan' => $this->faker->name,
            'jml_prodi' => $this->faker->randomDigitNotNull,
            'akreditasi' => $this->faker->randomElement(['A', 'B', 'C']),
        ];
    }
}

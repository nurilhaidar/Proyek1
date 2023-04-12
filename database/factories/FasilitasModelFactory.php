<?php

namespace Database\Factories;

use App\Models\FasilitasModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FasilitasModel>
 */
class FasilitasModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = FasilitasModel::class;
    public function definition()
    {
        return [
            'kode_gedung' => $this->faker->unique()->randomNumber(5),
            'nama_gedung' => $this->faker->company,
            'kapasitas' => $this->faker->numberBetween(1, 1000),
            'lokasi' => $this->faker->city,
            'kondisi' => $this->faker->randomElement(['cukup', 'baik', 'sangat baik']),
        ];
    }
}

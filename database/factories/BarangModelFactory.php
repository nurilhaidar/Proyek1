<?php

namespace Database\Factories;

use App\Models\BarangModel;
use Illuminate\Database\Eloquent\Factories\Factory;


class BarangModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = BarangModel::class;
    public function definition()
    {
         return [
            'kode_barang' => $this->faker->unique()->randomNumber(4),
            'nama_barang' => $this->faker->company,
            'jumlah_barang' => $this->faker->numberBetween(1, 1000),
            'kondisi' => $this->faker->randomElement(['cukup', 'baik', 'sangat baik']),
        ];
    }
}

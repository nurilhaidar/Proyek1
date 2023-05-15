<?php

namespace Database\Factories;

use App\Models\PeminjamanModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PeminjamanModel>
 */
class PeminjamanModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PeminjamanModel::class;
    public function definition()
    {
        return [
            'nama_peminjam' => $this->faker->unique()->name,
            'asal_oki' => $this->faker->company,
            'kode_barang' => $this->faker->unique()->randomNumber(4),
            'nama_barang' => $this->faker->company,
            'jumlah_barang' => $this->faker->numberBetween(1, 10),
            'tanggal_pinjam' => $this->faker->date(),
            'tanggal_kembali' => $this->faker->date(),
            'surat' => $this->faker->sentence,
            'jaminan' => $this->faker->sentence,
            'kondisi' => $this->faker->randomElement(['cukup', 'baik', 'sangat baik']),
            'status' => $this->faker->randomElement(['dipinjam', 'dikembalikan']),
        ];
    }
}

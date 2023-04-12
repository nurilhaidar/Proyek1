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

    //  protected $model = Oki::class; 
    public function definition()
    {
        return [
            'kode' => $this->faker->unique()->randomNumber(5),
            'nama_oki' => $this->faker->name,
            'ketua_oki' => $this->faker->name,
            'jumlah_anggota' => $this->faker->randomDigitNotNull,
            'akun' => $this->faker->name,
        ];
    }
}

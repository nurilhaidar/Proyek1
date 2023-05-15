<?php

namespace Database\Seeders;

use App\Models\PeminjamanModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PeminjamanModel::factory()->count(10)->create();
    }
}

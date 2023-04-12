<?php

namespace Database\Seeders;

use App\Models\FasilitasModel;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FasilitasModel::factory()->count(10)->create();
    }
}

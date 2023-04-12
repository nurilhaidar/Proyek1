<?php

namespace Database\Seeders;

use App\Models\oki;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OkiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        oki::factory()->count(10)->create();
    }
}

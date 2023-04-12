<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Widya Indah Puspita Sari',
                'email' => 'widyaindahpuspita.wi@gmail.com',
                'password' => Hash::make('1111')
            ],
            [
                'name' => 'Adinda Kurnia Rifanti',
                'email' => 'adindakkr@gmail.com',
                'password' => Hash::make('2222')
            ],
            [
                'name' => 'Afifah Nofa Kurnia',
                'email' => 'afifahrahma711@gmail.com',
                'password' => Hash::make('3333')
            ]
        ]);
    }
}

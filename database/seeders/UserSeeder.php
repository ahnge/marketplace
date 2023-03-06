<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => 'nayzaw',
            'email' => 'nayzaw@gmail.com',
            'ph_number' => fake()->phoneNumber(),
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'alice',
            'email' => 'alice@gmail.com',
            'ph_number' => fake()->phoneNumber(),
            'password' => Hash::make('password'),
        ]);
    }
}

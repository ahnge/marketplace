<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'user_id' => fake()->numberBetween(1, 2),
                'name' => fake()->name(),
                'description' => fake()->text(),
                'price' => fake()->randomFloat(2, 10, 10000),
            ]);
        }
    }
}

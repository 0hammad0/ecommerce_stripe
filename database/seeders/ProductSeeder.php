<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory(30)->create();

        \App\Models\Product::factory()->create([
            'prod_name' => fake()->Str::random(3),
            'prod_description' => fake()->paragraph(),
            'prod_image' => 'app/uploads/products/books.png',
            'prod_price' => fake()->numberBetween(20, 1000),
            'prod_qty' => fake()->numberBetween(0, 50),
        ]);
    }
}

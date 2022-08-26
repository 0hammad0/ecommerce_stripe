<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'prod_name' => fake()->sectence(3),
            'prod_description' => fake()->paragraph(),
            'prod_image' => 'app/uploads/products/books.png',
            'prod_price' => fake()->numberBetween(20, 1000),
            'prod_qty' => fake()->numberBetween(0, 50),
        ];
    }
}

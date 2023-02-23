<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'product_name'  =>fake()->colorName(),
           'product_price' =>random_int(100,700),
           'category_id'  =>DB::table('categories')->inRandomOrder()->first()->id,
        ];
    }
}

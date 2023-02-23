<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'city_name'  => fake()->city(),
            'lat'        =>fake()->latitude(),
            'long'       =>fake()->longitude(),
            'country_id' => DB::table('countries')->inRandomOrder()->first()->id,
        ];
    }
}

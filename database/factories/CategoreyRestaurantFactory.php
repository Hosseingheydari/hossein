<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoreyRestaurant>
 */
class CategoreyRestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name ,
            'cat_restaurant'=>$this->faker->randomElement(['coffee','restaraunt','fastfood','superi']),
            'acount_number' => str::random(5),
            'phone_number'=> str::random(10) ,
        ];
    }
}

<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'title'=>$this->faker->word() ,
            'slug'=> $this->faker->word() ,
            'content'=>$this->faker->word(),
            'status'=>$this->faker->randomElement(['draft','published','deleted'])
        ];
    }
}

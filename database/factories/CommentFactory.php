<?php

namespace Database\Factories;

use App\Models\Books;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book_id' => Books::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'description' => $this->faker->sentence()

        ];
    }
}

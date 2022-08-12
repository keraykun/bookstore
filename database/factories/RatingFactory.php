<?php

namespace Database\Factories;

use App\Models\Rating;
use App\Models\User;
use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'user_id' => User::all()->random()->id,
            // 'rating' => rand(1,5),
            // 'book_id'=>Books::all()->random()->id,

            'rating' =>5,
            'book_id'=>1,
        ];
    }
}

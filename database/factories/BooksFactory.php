<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;
use Illuminate\Support\Facades\Auth;

class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'author_id'=>Author::all()->random()->user_id,
            'author_id'=>rand(1,5),
            'title' => $this->faker->word,
            'name' => $this->faker->sentence,
        ];
    }
}

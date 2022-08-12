<?php

namespace Database\Seeders;

use App\Models\Books;
use App\Models\Rating;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\User;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Rating::factory(300)->create();
        foreach(Comment::all() as $comment){
            $comment->rating()->create([
                'book_id'=>$comment['book_id'],
                'rating'=>rand(1,5),
                'user_id'=>User::all()->random()->id
            ]);
        }
    }
}

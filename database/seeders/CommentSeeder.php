<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Seeder;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Comment::factory(1000)->create();
    //    foreach(Comment::all() as $comment){
    //     $comment->user()->create([

    //     ]);
    //    }
    }
}

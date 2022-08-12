<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use App\Models\Rating;
use Illuminate\Database\Seeder;

class UpdaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    foreach(Rating::all() as $rating){
    //         DB::table('ratings')->where('id',$rating['id'])->update(['user_id' =>rand(1,5)]);
    //    }

       foreach(Comment::all() as $comment){
        DB::table('comments')->where('id',$comment['id'])->update(['book_id' =>rand(1,50)]);
         }
    }
}

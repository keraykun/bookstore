<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Books;
use App\Models\Genre;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Books::factory(50)->create();
        foreach(Books::all() as $book){
           $rating = Genre::inRandomOrder()->take(rand(1,24))->pluck('id');
        //    $book->ratings()->attach($rating,['rating'=>rand(1,5)]);
        $book->genres()->attach($rating);
       }
    }
}

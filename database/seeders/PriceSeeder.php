<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(Books::all() as $book){
            $book->price()->create([
                'book_id'=>$book['id'],
                'amount'=>rand(300,10000)
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Books;
use Illuminate\Support\Facades\DB;

class Book_detailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create(1);
        foreach(Books::all() as $book){
           $book->detail()->create([
                'book_id' =>$book['id'],
                'page'=>rand(200,500),
                'width'=> rand(12, 89) / 10,
                'height'=>rand(14, 95)/ 10,
                'publisher'=>$faker->name
            ]);
        }
    }
}

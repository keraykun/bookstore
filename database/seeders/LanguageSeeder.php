<?php

namespace Database\Seeders;

use App\Models\Books;
use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Language::factory(30)->create();

        foreach(Books::all() as $book){
           $language = Language::inRandomOrder()->take(rand(1,30))->pluck('id');
           $book->languages()->attach($language);
        }
    }
}

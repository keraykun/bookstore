<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Genre::create([
            'name'=>'Teens'
        ]);
        Genre::create([
            'name'=>'Children'
        ]);
        Genre::create([
            'name'=>'Lovestory'
        ]);
        Genre::create([
            'name'=>'Horror '
        ]);
        Genre::create([
            'name'=>'FairyTale'
        ]);
        Genre::create([
            'name'=>'Lifestyle'
        ]);
        Genre::create([
            'name'=>'Magazine'
        ]);
        Genre::create([
            'name'=>'School'
        ]);
        Genre::create([
            'name'=>'College'
        ]);
        Genre::create([
            'name'=>'Comendy'
        ]);
        Genre::create([
            'name'=>'Romance'
        ]);
        Genre::create([
            'name'=>'Kingdom'
        ]);
        Genre::create([
            'name'=>'Ichi '
        ]);
        Genre::create([
            'name'=>'Novel'
        ]);
        Genre::create([
            'name'=>'Fiction'
        ]);
        Genre::create([
            'name'=>'Thriller'
        ]);
        Genre::create([
            'name'=>'Science Fiction'
        ]);
        Genre::create([
            'name'=>'Fantasy'
        ]);
        Genre::create([
            'name'=>'Mystery'
        ]);
        Genre::create([
            'name'=>'Drama'
        ]);
        Genre::create([
            'name'=>'Action'
        ]);
        // Genre::create([
        //     'name'=>'Poetry'
        // ]);
        // Genre::create([
        //     'name'=>'Childrens Literature'
        // ]);
        // Genre::create([
        //     'name'=>'Humor'
        // ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // User::factory(10)->create();
        $this->call([
            // CountrySeeder::class,
            // CitySeeder::class,
            // PhoneSeeder::class,
            // User_detailsSeeder::class
            //RatingSeeder::class
            PriceSeeder::class
            //CommentSeeder::class
            //Book_detailsSeeder::class
           // AwardSeeder::class
        ]);
    }
}

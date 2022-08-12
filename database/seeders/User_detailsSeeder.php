<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Country;
use App\Models\City;
use Illuminate\Database\Seeder;

class User_detailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create(1);
        foreach(User::all() as $user){
            $user->details()->create([
            'user_id'=>$user['id'],
            'country_id'=>Country::all()->random()->id,
            'city_id'=>City::all()->random()->id,
            'address'=>$faker->address,
            'birth_of_month'=>now()
            ]);
        }
    }
}

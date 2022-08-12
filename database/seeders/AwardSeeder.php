<?php

namespace Database\Seeders;

use App\Models\Award;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Award::factory(100)->create();

    }
}

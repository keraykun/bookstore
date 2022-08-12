<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('user_details')){
        Schema::create('user_details', function (Blueprint $table) {
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onDelete();
            $table->foreignId('country_id')->constrained()->onDelete();
            $table->foreignId('city_id')->constrained()->onDelete();
            $table->string('address');
            $table->date('birth_of_month');
        });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_details');
    }
}

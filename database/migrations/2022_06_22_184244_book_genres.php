<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookGenres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('book_genres')) {
        Schema::create('book_genres', function (Blueprint $table) {
            $table->foreignId('book_id')->constrained()->onDelete();
            $table->foreignId('genre_id')->constrained()->onDelete();
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
        Schema::dropIfExists('book_genres');
    }
}

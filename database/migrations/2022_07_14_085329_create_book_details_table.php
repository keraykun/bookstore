<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('book_details')) {
        Schema::create('book_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained()->onDelete();
            $table->integer('page');
            $table->decimal('width', 5, 4);
            $table->decimal('height', 5, 4);
            $table->string('publisher');
            $table->timestamps();
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
        Schema::dropIfExists('books_detail');
    }
}

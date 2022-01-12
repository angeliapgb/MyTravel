<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('place_id');
            $table->foreignId('book_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('place_id')->references('id')->on('place');
            $table->foreign('book_id')->references('id')->on('book');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_detail');
    }
}

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
            $table->foreignId('user_id')->nullable();
            $table->foreignId('place_id')->nullable();
            $table->string('name')->nullable();
            $table->date('departure')->nullable();
            $table->date('arrival')->nullable();
            $table->bigInteger('amount')->nullable();
            $table->string('type')->nullable();
            $table->string('destination')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('place_id')->references('id')->on('place');
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

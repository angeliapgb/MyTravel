<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaceDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('place_id');
            $table->string('place');
            $table->string('day');
            $table->string('detail');

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
        Schema::dropIfExists('place_detail');
    }
}

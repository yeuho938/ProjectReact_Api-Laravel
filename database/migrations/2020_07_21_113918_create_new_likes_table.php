<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_likes', function (Blueprint $table) {
           $table->id();
           $table->unsignedBigInteger('user_id');
           $table->foreign('user_id')->references('id')->on('users');
           $table->unsignedBigInteger('new_id');
           $table->foreign('new_id')->references('id')->on('news');
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
        Schema::dropIfExists('new_likes');
    }
}

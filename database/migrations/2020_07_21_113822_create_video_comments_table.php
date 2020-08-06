<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_comments', function (Blueprint $table) {
         $table->id();
         $table->unsignedBigInteger('user_id');
         $table->foreign('user_id')->references('id')->on('users');
         $table->unsignedBigInteger('video_id');
         $table->foreign('video_id')->references('id')->on('videos');
         $table->string('content');
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
        Schema::dropIfExists('video_comments');
    }
}

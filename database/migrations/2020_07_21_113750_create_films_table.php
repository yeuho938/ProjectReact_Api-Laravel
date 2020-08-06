<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
           $table->id();
           $table->string('name');
           $table->string('image');
           $table->string('video');
           $table->longText('content');
           $table->string('link');
           $table->unsignedBigInteger('category_id');
           $table->foreign('category_id')->references('id')->on('film_categories');
           $table->datetime('datetime');
           $table->string('status');
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
        Schema::dropIfExists('films');
    }
}

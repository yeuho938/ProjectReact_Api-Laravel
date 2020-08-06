<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    |
    */

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ),

];

            $table->id();
          $table->string('name');
          $table->string('video');
          $table->unsignedBigInteger('category_id');
          $table->foreign('category_id')->references('id')->on('video_categories');
          $table->string('content');
          $table->datetime('datetime');
          $table->timestamps();

          $table->id();
         $table->unsignedBigInteger('user_id');
         $table->foreign('user_id')->references('id')->on('users');
         $table->unsignedBigInteger('film_id');
         $table->foreign('film_id')->references('id')->on('films');
         $table->string('content');
         $table->timestamps();

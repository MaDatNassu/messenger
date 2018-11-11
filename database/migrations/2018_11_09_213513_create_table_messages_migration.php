<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMessagesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('messages', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('sender_id')->foreign('user_id')->references('id')->on('users')->nullable();
          $table->integer('receiver_id')->foreign('user_id')->references('id')->on('users')->nullable();
          $table->integer('thread_id')->foreign('thread_id')->references('id')->on('threads')->nullable();
          $table->longText('message');
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
      Schema::dropIfExists('messages');
    }
}

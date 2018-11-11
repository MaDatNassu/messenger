<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
use App\Thread;

class CreateTablePivotThreadsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('thread_user', function (Blueprint $table) {
          $table->integer('user_id')->foreign('user_id')->references('id')->on('users')->default('0');
          $table->integer('thread_id')->foreign('thread_id')->references('id')->on('threads')->default('0');
      });

      $users = App\User::all();
      if( $users ){
        foreach ($users as $user) {
          if ( $user->messages != null ) {
            $user->threads()->sync( $user->messages->pluck('thread_id')->toArray() );
          }
        }
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thread_user');
    }
}

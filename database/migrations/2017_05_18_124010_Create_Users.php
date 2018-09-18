<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('job');
            $table->string('status');
            $table->string('gender');
            $table->string('address');
            $table->date('birthday');
            $table->integer('following_sum');
            $table->integer('follower_sum');
            $table->integer('post_sum');
            $table->string('profpic')->default('default.png');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
         Schema::drop('users');
    }
}

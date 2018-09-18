<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersExpertise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersexpertise', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id');
            $table->string('des_expertise');
            $table->integer('score_e');
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
        Schema::drop('usersexpertise');
    }
}

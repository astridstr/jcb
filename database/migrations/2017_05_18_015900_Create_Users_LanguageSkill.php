<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersLanguageSkill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userslanguageskill', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id');
            $table->string('des_languageskill');
            $table->integer('score_l');
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
       Schema::drop('userslanguageskill');
    }
}

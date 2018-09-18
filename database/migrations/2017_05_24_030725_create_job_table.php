<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('job', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id');
            $table->string('nama_perusahaan');
            $table->string('title_job',200);
            $table->string('des_job',2000);
            $table->string('image')->nullable();
            $table->integer('like');
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
        Schema::drop('job');
    }
}

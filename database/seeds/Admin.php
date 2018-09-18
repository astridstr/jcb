<?php

use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(array(
           'name'=>'adminjcb',
    		'email'=>'admin@jcb.com',
    		'password'=>bcrypt('adminjcb'),
        ));
    }
}

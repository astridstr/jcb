<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name', 'job', 'status', 'address', 'birtdhay','gender','profpic','following_sum', 'follower_sum','post_sum','email', 'password', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];

    public function post(){
        return $this->hasMany('App\Post','users_id');
    }

    public function comment(){
        return $this->hasMany('App\Comment','users_id');
    }


}
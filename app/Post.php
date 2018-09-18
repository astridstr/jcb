<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Post extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    // protected $fillable = array('users_id');
    protected $fillable = [
    'id', 
    'users_id', 
    'des_post',
    'image',
    'like',
    ]; 

    public function user(){
    	return $this->belongsTo('App\User','users_id');
    }

    public function comment(){
    	return $this->hasMany('App\Comment','post_id');
    }

}

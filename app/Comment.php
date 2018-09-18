<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
    'id', 
    'users_id', 
    'post_id',
    'des_comment',
    ]; 

    public function users(){
    	return $this->belongsTo('App\User','users_id');
    }

    public function post(){
    	return $this->belongsTo('App\Post','post_id');
    }

}

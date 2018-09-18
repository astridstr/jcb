<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Followers extends Model
{
    protected $table = 'followers';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
     protected $fillable = [
    'id', 
    'users_id', 
    'followers_id'
    ]; 
    public function users(){
    	return $this->belongsTo('App\User', 'followers_id');
    }
}
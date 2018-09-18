<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Following extends Model
{
    protected $table = 'following';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
   protected $fillable = [
    'id', 
    'users_id', 
    'following_id'
    ]; 
    public function users(){
    	return $this->belongsTo('App\User', 'following_id');
    }
}

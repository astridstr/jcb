<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    // protected $fillable = array('users_id');
    protected $fillable = [
    'id', 
    'users_id',
    'nama_perusahaan', 
    'des_job',
    'image',
    'like',
    ]; 

    public function user(){
    	return $this->belongsTo('App\Admin','users_id');
    }

    // public function comment(){
    // 	return $this->hasMany('App\Comment','post_id');
    // }
}

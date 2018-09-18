<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersEducation extends Model
{
    protected $table = 'userseducation';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = array('users_id');
    public function users(){
    	return $this->hasMany(App\User);
    }
}

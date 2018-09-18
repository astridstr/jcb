<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersOrganization extends Model
{
    protected $table = 'usersorganization';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = array('users_id');
    public function users(){
    	return $this->hasMany(App\User);
    }
}

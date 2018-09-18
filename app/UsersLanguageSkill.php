<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersLanguageSkill extends Model
{
    protected $table = 'userslanguageskill';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = array('users_id');
    public function users(){
        return $this->hasMany(App\User);
    }
}

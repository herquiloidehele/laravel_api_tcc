<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'users';
    protected $fillable = ['username', 'password', 'nome', 'foto', 'estado', 'remember_token'];
    protected $hidden = ['password', 'remember_token',];


    public function revendedor(){
        return $this->hasOne('App\Models\Revendedor', 'users_id');
    }

    public function produtor(){
        return $this->hasOne('App\Models\Produtor', 'users_id');
    }

    public function cadastrador(){
        return $this->hasOne('App\Models\Cadastrador', 'users_id');
    }



    public function setPasswordAttribute($value){
        $this->attributes['password']  = bcrypt($value);
    }


}

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
    protected $fillable = ['username', 'senha', 'nome', 'foto', 'estado',];
    protected $hidden = ['senha', 'remember_token',];




}

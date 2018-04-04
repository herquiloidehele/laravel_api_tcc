<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cadastrador extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'cadastradores';
    protected $fillable = ['users_id', 'telefone'];


    public function user(){
        return $this->belongsTo('App\User', 'users_id');
    }
}

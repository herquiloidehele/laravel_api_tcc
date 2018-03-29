<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produtor extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'produtores';
    protected $fillable = ['users_id', 'localizacoes_id'];
}

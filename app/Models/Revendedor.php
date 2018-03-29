<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Revendedor extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'revendoedores';
    protected $fillable = ['user_id', 'mercados_id'];
}

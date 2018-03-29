<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'produtos';
    protected $fillable = ['designacao', 'categoria_produtos_id' ,'epocas_id', ];
}

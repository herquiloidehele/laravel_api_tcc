<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Interesse extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'interesses';
    protected $fillable = ['produtos_unidades_medidas_id', 'produtores_id', 'revendedores_id', 'quantidade_media' ];
}

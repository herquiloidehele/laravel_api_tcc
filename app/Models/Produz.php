<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produz extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'produz';
    protected $fillable = ['produtos_unidades_medidas_id', 'produtores_id', 'quantidade_media'];
}

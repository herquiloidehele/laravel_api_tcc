<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Epoca extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'epocas';
    protected $fillable = ['mes_inicio', 'mes_fim' ];
}

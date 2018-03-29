<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Variedade extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'variedades';
    protected $fillable = ['designacao', 'produtos_id' ];
}

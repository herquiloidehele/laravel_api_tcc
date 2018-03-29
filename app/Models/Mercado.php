<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mercado extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'mercados';
    protected $fillable = ['designacao',  'localizacoes_id'];

}

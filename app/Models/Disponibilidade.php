<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disponibilidade extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'disponibilidades';
    protected $fillable = ['procuras_id',  'produtores_id', 'preco', 'quantidade'];
}

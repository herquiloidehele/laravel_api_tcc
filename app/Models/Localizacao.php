<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Localizacao extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'localizacoes';
    protected $fillable = ['endereco', 'latitude', 'logentude', ];


}

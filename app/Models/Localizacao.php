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
    protected $fillable = ['poligono', 'latitude', 'logentude', ];



    public function mercado(){
        return $this->hasOne('App\Models\Mercado', 'localizacoes_id');
    }

    public function produtor(){
        return $this->hasOne('App\Models\Produtor', 'localizacoes_id');
    }

}

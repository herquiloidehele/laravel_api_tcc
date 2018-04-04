<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Procura extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'procuras';
    protected $fillable = ['produtos_unidades_medidas', 'revendedores_id', 'estado', 'quantidade' ];


    public function produtores(){
        return $this->belongsToMany('App\Models\Produtor', 'disponibilidades', 'procuras_id', 'produtores_id');
    }

}

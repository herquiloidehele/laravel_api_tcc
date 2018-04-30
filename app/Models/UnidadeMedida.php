<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UnidadeMedida extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'unidades_medidas';
    protected $fillable = ['designacao', 'abreviatura'];


    public function procuras(){
        return $this->hasMany('App\Models\Procura', 'unidades_medidas_id');
    }

    public function interesses(){
        return $this->hasMany('App\Models\Interesse', 'unidades_medidas_id');
    }

    public function producoes(){
        return $this->hasMany('App\Models\Produz', 'unidades_medidas_id');
    }

    public function ofertas(){
        return $this->hasMany('App\Models\Oferta', 'unidades_medidas_id');
    }

}

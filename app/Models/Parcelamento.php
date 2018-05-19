<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parcelamento extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'parcelamento';
    protected $fillable = ['quantidade', 'peco', 'ofertas_id'];
//    protected $with = ['user'];


    public function oferta(){
        return $this->belongsTo('App\Models\Oferta', 'ofertas_id');
    }

    public function revendedores(){
        return $this->belongsToMany('App\Models\Revendedor', 'reservas_parcelas', 'parcelamento_id', 'revendedores_id');
    }


}

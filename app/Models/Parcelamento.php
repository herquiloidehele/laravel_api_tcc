<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parcelamento extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'parcelamento';
    protected $fillable = ['quantidade', 'preco', 'ofertas_id', 'unidades_medidas_id'];



    public function oferta(){
        return $this->belongsTo('App\Models\Oferta', 'ofertas_id');
    }



}

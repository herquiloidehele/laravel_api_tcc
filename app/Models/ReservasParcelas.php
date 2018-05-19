<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReservasParcelas extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'reservas_parcelas';
    protected $fillable = ['revendedores_id', 'parcelamento_id', 'is_aceite', 'mensagem'];


    public function unidadeMedida(){
        return $this->belongsTo('App\Models\UnidadeMedida', 'unidades_medidas_id');
    }


}

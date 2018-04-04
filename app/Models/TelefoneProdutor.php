<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TelefoneProdutor extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'telefone_produtores';
    protected $fillable = ['designacao', 'produtores_id' ];


    public function produtor(){
        return $this->belongsTo('App\Models\Produtor', 'produtores_id');
    }

}

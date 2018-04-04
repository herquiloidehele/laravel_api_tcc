<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TelefoneRevendedor extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'telefone_revendedores';
    protected $fillable = ['designacao', 'revendedores_id' ];


   public function revendedor(){
       return $this->belongsTo('App\Models\Revendedor', 'revendedores_id');
   }

}

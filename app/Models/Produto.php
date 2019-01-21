<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $designacao designacao
@property int $categorias_id categorias id
@property enum $estado estado
@property timestamp $created_at created at
@property timestamp $updated_at updated at
@property timestamp $deleted_at deleted at
@property Categoria $categoria belongsTo
@property \Illuminate\Database\Eloquent\Collection $interess hasMany
@property \Illuminate\Database\Eloquent\Collection $oferta hasMany
@property \Illuminate\Database\Eloquent\Collection $procura hasMany
@property \Illuminate\Database\Eloquent\Collection $produz hasMany
   
 */
class Produto extends Model 
{
    const ESTADO_ACTIVO='ACTIVO';

const ESTADO_DESACTIVO='DESACTIVO';

    /**
    * Database table name
    */
    protected $table = 'produtos';

    /**
    * Mass assignable columns
    */
    protected $fillable=['designacao',
'categorias_id',
'estado'];

    /**
    * Date time columns.
    */
    protected $dates=[];

    /**
    * categoria
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class,'categorias_id');
    }

    /**
    * interesses
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function interesses()
    {
        return $this->hasMany(Interess::class,'produtos_id');
    }
    /**
    * ofertas
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function ofertas()
    {
        return $this->hasMany(Oferta::class,'produtos_id');
    }
    /**
    * procuras
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function procuras()
    {
        return $this->hasMany(Procura::class,'produtos_id');
    }
    /**
    * produzs
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function produzs()
    {
        return $this->hasMany(Produz::class,'produtos_id');
    }



}
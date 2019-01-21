<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $designacao designacao
@property varchar $foto foto
@property timestamp $created_at created at
@property timestamp $updated_at updated at
@property timestamp $deleted_at deleted at
@property \Illuminate\Database\Eloquent\Collection $produto hasMany
   
 */
class Categoria extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'categorias';

    /**
    * Mass assignable columns
    */
    protected $fillable=['designacao',
'foto'];
    /**
    * casts
    */
    protected $casts=['designacao'=>'string',
'foto'=>'string'];
    /**
    * Date time columns.
    */
    protected $dates=[];

    /**
    * produtos
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function produtos()
    {
        return $this->hasMany(Produto::class,'categorias_id');
    }



}
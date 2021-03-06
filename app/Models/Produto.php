<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 Apr 2019 15:04:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Produto
 * 
 * @property int $id
 * @property string $designacao
 * @property int $categorias_id
 * @property string $estado
 * @property string $default_photo
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \App\Models\Categoria $categoria
 * @property \Illuminate\Database\Eloquent\Collection $interesses
 * @property \Illuminate\Database\Eloquent\Collection $ofertas
 * @property \Illuminate\Database\Eloquent\Collection $procuras
 * @property \Illuminate\Database\Eloquent\Collection $produzs
 *
 * @package App\Models
 */
class Produto extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'categorias_id' => 'int'
	];

	protected $fillable = [
		'designacao',
		'categorias_id',
		'estado',
		'default_photo'
	];

	protected $with = ['categoria'];

	public function categoria()
	{
		return $this->belongsTo(\App\Models\Categoria::class, 'categorias_id');
	}

	public function interesses()
	{
		return $this->hasMany(\App\Models\Interess::class, 'produtos_id');
	}

	public function ofertas()
	{
		return $this->hasMany(\App\Models\Oferta::class, 'produtos_id');
	}

	public function procuras()
	{
		return $this->hasMany(\App\Models\Procura::class, 'produtos_id');
	}

	public function produzs()
	{
		return $this->hasMany(\App\Models\Produz::class, 'produtos_id');
	}

    public function produtores(){
        return $this->belongsToMany(Produtore::class, 'produz', 'produtos_id', 'produtores_id')
            ->withPivot('id', 'deleted_at');
    }
}

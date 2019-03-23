<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 Jan 2019 14:47:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Distrito
 * 
 * @property int $id
 * @property string $designacao
 * @property int $provincias_id
 * 
 * @property \App\Models\Provincia $provincia
 * @property \Illuminate\Database\Eloquent\Collection $mercado
 * @property \Illuminate\Database\Eloquent\Collection $ofertas
 * @property \Illuminate\Database\Eloquent\Collection $procuras
 * @property \Illuminate\Database\Eloquent\Collection $produtores
 *
 * @package App\Models
 */
class Distrito extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'provincias_id' => 'int'
	];

	protected $fillable = [
		'designacao',
		'provincias_id'
	];

    protected $with = ['provincia'];


	public function provincia()
	{
		return $this->belongsTo(\App\Models\Provincia::class, 'provincias_id');
	}

	public function mercados()
	{
		return $this->hasMany(\App\Models\Mercado::class, 'distritos_id');
	}

	public function ofertas()
	{
		return $this->hasMany(\App\Models\Oferta::class, 'distritos_id');
	}

	public function procuras()
	{
		return $this->hasMany(\App\Models\Procura::class, 'distritos_id');
	}

	public function produtores()
	{
		return $this->hasMany(\App\Models\Produtore::class, 'distritos_id');
	}
}

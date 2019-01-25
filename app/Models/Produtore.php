<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 Jan 2019 14:47:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Produtore
 * 
 * @property int $id
 * @property string $telefone
 * @property int $users_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property int $distritos_id
 * 
 * @property \App\Models\Distrito $distrito
 * @property \App\User $user
 * @property \Illuminate\Database\Eloquent\Collection $ofertas
 * @property \Illuminate\Database\Eloquent\Collection $produzs
 *
 * @package App\Models
 */
class Produtore extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'users_id' => 'int',
		'distritos_id' => 'int'
	];

	protected $fillable = [
		'telefone',
		'users_id',
		'distritos_id'
	];

	public function distrito()
	{
		return $this->belongsTo(\App\Models\Distrito::class, 'distritos_id');
	}

	public function user()
	{
		return $this->belongsTo(\App\User::class, 'users_id');
	}

	public function ofertas()
	{
		return $this->hasMany(\App\Models\Oferta::class, 'produtores_id');
	}

	public function produzs()
	{
		return $this->hasMany(\App\Models\Produz::class, 'produtores_id');
	}
}

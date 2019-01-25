<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 Jan 2019 14:47:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Revendedore
 * 
 * @property int $id
 * @property int $users_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property int $mercados_id
 * @property string $telefone
 * @property string $tipo_revendedor
 * 
 * @property \App\Models\Mercado $mercado
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $interesses
 * @property \Illuminate\Database\Eloquent\Collection $procuras
 *
 * @package App\Models
 */
class Revendedore extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'users_id' => 'int',
		'mercados_id' => 'int'
	];

	protected $fillable = [
		'users_id',
		'mercados_id',
		'telefone',
		'tipo_revendedor'
	];

	public function mercado()
	{
		return $this->belongsTo(\App\Models\Mercado::class, 'mercados_id');
	}

	public function user()
	{
		return $this->belongsTo(\App\User::class, 'users_id');
	}

	public function interesses()
	{
		return $this->hasMany(\App\Models\Interess::class, 'revendedores_id');
	}

	public function procuras()
	{
		return $this->hasMany(\App\Models\Procura::class, 'revendedores_id');
	}
}
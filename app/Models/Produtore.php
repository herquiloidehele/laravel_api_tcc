<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 Apr 2019 15:04:47 +0000.
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
 * @property \App\Models\User $user
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
		return $this->belongsTo(\App\Models\User::class, 'users_id');
	}

	public function ofertas()
	{
		return $this->hasMany(\App\Models\Oferta::class, 'produtores_id')->orderBy('id', 'desc');
	}

	public function produzs()
	{
		return $this->hasMany(\App\Models\Produz::class, 'produtores_id');
	}

    public function produtosProduzidos(){
        return $this->belongsToMany(Produto::class, 'produz', 'produtores_id', 'produtos_id')
            ->withPivot('id', 'deleted_at');
    }
}

<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 Jan 2019 14:47:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Categoria
 * 
 * @property int $id
 * @property string $designacao
 * @property string $foto
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $produtos
 *
 * @package App\Models
 */
class Categoria extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'designacao',
		'foto'
	];

	public function produtos()
	{
		return $this->hasMany(\App\Models\Produto::class, 'categorias_id');
	}
}

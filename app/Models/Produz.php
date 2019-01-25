<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 Jan 2019 14:47:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Produz
 * 
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property int $produtores_id
 * @property int $produtos_id
 * 
 * @property \App\Models\Produtore $produtore
 * @property \App\Models\Produto $produto
 *
 * @package App\Models
 */
class Produz extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'produz';

	protected $casts = [
		'produtores_id' => 'int',
		'produtos_id' => 'int'
	];

	protected $fillable = [
		'produtores_id',
		'produtos_id'
	];

	public function produtore()
	{
		return $this->belongsTo(\App\Models\Produtore::class, 'produtores_id');
	}

	public function produto()
	{
		return $this->belongsTo(\App\Models\Produto::class, 'produtos_id');
	}
}

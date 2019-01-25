<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 Jan 2019 14:21:25 +0000.
 */

namespace App;

use Illuminate\Foundation\Auth\User as Authenticable;

/**
 * Class User
 * 
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $nome
 * @property string $foto
 * @property int $estado
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $remember_token
 * 
 * @property \Illuminate\Database\Eloquent\Collection $cadastradores
 * @property \Illuminate\Database\Eloquent\Collection $produtores
 * @property \Illuminate\Database\Eloquent\Collection $revendedores
 *
 * @package App\Models
 */
class User extends Authenticable
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    use \Illuminate\Notifications\Notifiable;

	protected $casts = [
		'estado' => 'int'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'username',
		'password',
		'nome',
		'foto',
		'estado',
		'remember_token'
	];

	public function cadastradores()
	{
		return $this->hasMany(\App\Models\Cadastradore::class, 'users_id');
	}

	public function produtores()
	{
		return $this->hasMany(\App\Models\Produtore::class, 'users_id');
	}

	public function revendedores()
	{
		return $this->hasMany(\App\Models\Revendedore::class, 'users_id');
	}

    public function setPasswordAttribute($value){
        $this->attributes['password']  = bcrypt($value);
    }
}

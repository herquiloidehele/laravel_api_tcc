<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRevendedoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('revendedores', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('users_id')->index('fk_revendedores_users1_idx');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('mercados_id')->nullable()->index('fk_revendedores_mercados1_idx');
			$table->string('telefone', 45)->nullable();
			$table->enum('tipo_revendedor', array('FABRICA','LOJA','INDIVIDUAL'))->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('revendedores');
	}

}

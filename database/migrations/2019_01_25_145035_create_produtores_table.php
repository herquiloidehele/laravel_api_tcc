<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdutoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produtores', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('telefone', 12)->nullable();
			$table->integer('users_id')->index('fk_produtores_users1_idx');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('distritos_id')->index('fk_produtores_distritos1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produtores');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRevendedoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('revendedores', function(Blueprint $table)
		{
			$table->foreign('mercados_id', 'fk_revendedores_mercados1')->references('id')->on('mercados')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('users_id', 'fk_revendedores_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('revendedores', function(Blueprint $table)
		{
			$table->dropForeign('fk_revendedores_mercados1');
			$table->dropForeign('fk_revendedores_users1');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCadastradoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cadastradores', function(Blueprint $table)
		{
			$table->foreign('users_id', 'fk_cadatradores_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cadastradores', function(Blueprint $table)
		{
			$table->dropForeign('fk_cadatradores_users1');
		});
	}

}

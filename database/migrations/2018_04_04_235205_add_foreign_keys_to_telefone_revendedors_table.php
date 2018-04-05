<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTelefoneRevendedorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('telefone_revendedors', function(Blueprint $table)
		{
			$table->foreign('revendedores_id', 'fk_telefones_revendedores1')->references('id')->on('revendedores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('telefone_revendedors', function(Blueprint $table)
		{
			$table->dropForeign('fk_telefones_revendedores1');
		});
	}

}

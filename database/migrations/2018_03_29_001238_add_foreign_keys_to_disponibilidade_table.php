<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDisponibilidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('disponibilidade', function(Blueprint $table)
		{
			$table->foreign('procura_id', 'fk_procura_has_produtores_procura1')->references('id')->on('procura')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('produtores_id', 'fk_procura_has_produtores_produtores1')->references('id')->on('produtores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('disponibilidade', function(Blueprint $table)
		{
			$table->dropForeign('fk_procura_has_produtores_procura1');
			$table->dropForeign('fk_procura_has_produtores_produtores1');
		});
	}

}

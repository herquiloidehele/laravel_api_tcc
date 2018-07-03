<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTelefoneProdutoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('telefone_produtores', function(Blueprint $table)
		{
			$table->foreign('produtores_id', 'fk_telefone_produtores_produtores1')->references('id')->on('produtores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('telefone_produtores', function(Blueprint $table)
		{
			$table->dropForeign('fk_telefone_produtores_produtores1');
		});
	}

}

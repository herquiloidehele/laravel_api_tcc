<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMercadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mercado', function(Blueprint $table)
		{
			$table->foreign('distritos_id', 'fk_mercados_distritos1')->references('id')->on('distritos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mercado', function(Blueprint $table)
		{
			$table->dropForeign('fk_mercados_distritos1');
		});
	}

}

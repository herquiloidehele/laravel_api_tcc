<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToImagensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('imagens', function(Blueprint $table)
		{
			$table->foreign('ofertas_id', 'fk_imagens_ofertas1')->references('id')->on('ofertas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('imagens', function(Blueprint $table)
		{
			$table->dropForeign('fk_imagens_ofertas1');
		});
	}

}

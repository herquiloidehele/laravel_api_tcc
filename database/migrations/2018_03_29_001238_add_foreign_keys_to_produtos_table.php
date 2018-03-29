<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProdutosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produtos', function(Blueprint $table)
		{
			$table->foreign('categoria_produtos_id', 'fk_produtos_categoria_produtos1')->references('id')->on('categoria_produtos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('epocas_produtos_id', 'fk_produtos_epocas_produtos1')->references('id')->on('epocas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produtos', function(Blueprint $table)
		{
			$table->dropForeign('fk_produtos_categoria_produtos1');
			$table->dropForeign('fk_produtos_epocas_produtos1');
		});
	}

}

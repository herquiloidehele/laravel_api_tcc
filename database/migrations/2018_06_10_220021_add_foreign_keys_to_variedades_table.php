<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVariedadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('variedades', function(Blueprint $table)
		{
			$table->foreign('produtos_id', 'fk_variedades_produtos_produtos')->references('id')->on('produtos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('variedades', function(Blueprint $table)
		{
			$table->dropForeign('fk_variedades_produtos_produtos');
		});
	}

}

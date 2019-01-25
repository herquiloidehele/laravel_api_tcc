<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDistritosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('distritos', function(Blueprint $table)
		{
			$table->foreign('provincias_id', 'fk_distritos_provincias1')->references('id')->on('provincias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('distritos', function(Blueprint $table)
		{
			$table->dropForeign('fk_distritos_provincias1');
		});
	}

}

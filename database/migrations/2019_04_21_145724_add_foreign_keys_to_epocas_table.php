<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEpocasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('epocas', function(Blueprint $table)
		{
			$table->foreign('produz_id', 'fk_epocas_produz1')->references('id')->on('produz')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('epocas', function(Blueprint $table)
		{
			$table->dropForeign('fk_epocas_produz1');
		});
	}

}

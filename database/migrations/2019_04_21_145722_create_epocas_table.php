<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEpocasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('epocas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('inicio', 55)->nullable();
			$table->string('fim', 55)->nullable();
			$table->integer('produz_id')->index('fk_epocas_produz1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('epocas');
	}

}

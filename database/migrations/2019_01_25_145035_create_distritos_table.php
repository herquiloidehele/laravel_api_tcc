<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDistritosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('distritos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('designacao', 105)->nullable();
			$table->integer('provincias_id')->index('fk_distritos_provincias1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('distritos');
	}

}

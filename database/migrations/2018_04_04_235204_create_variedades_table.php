<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVariedadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('variedades', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('designacao', 45);
			$table->integer('produtos_id')->index('fk_variedades_produtos_produtos_idx');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('variedades');
	}

}

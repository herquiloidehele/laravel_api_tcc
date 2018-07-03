<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalizacoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('localizacoes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('poligono', 200)->nullable();
			$table->float('latitude', 10, 0)->nullable();
			$table->float('longetude', 10, 0)->nullable();
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
		Schema::drop('localizacoes');
	}

}

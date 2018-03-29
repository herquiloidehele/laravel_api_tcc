<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalizacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('localizacao', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('endereco', 45)->nullable();
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
		Schema::drop('localizacao');
	}

}

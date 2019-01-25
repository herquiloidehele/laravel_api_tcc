<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdutosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produtos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('designacao', 45)->nullable();
			$table->integer('categorias_id')->index('fk_produtos_interesses_categoria_produtos1_idx');
			$table->enum('estado', array('ACTIVO','DESACTIVO'));
			$table->text('default_photo', 65535)->nullable();
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
		Schema::drop('produtos');
	}

}

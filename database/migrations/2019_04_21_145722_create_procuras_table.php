<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProcurasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('procuras', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('designacao', 65535)->nullable();
			$table->integer('revendedores_id')->index('fk_produtos_unidades_mendidas_has_revendedores_revendedores_idx');
			$table->integer('unidades_medidas_id')->index('fk_procuras_unidades_medidas1_idx');
			$table->integer('produtos_id')->nullable()->index('fk_procuras_produtos1_idx');
			$table->integer('quantidade')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->enum('estado', array('ACTIVO','DESACTIVO'));
			$table->integer('distritos_id')->index('fk_procuras_distritos1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('procuras');
	}

}

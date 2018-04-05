<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOfertasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ofertas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('produtores_id')->index('fk_produtores_has_produtos_unidades_mendidas_produtores2_idx');
			$table->integer('produtos_unidades_medidas_id')->index('fk_produtores_has_produtos_unidades_mendidas_produtos_unida_idx');
			$table->float('preco', 10, 0)->nullable();
			$table->integer('quantidade')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->dateTime('data_fim')->nullable();
			$table->boolean('estado')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ofertas');
	}

}

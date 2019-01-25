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
			$table->string('designacao', 45)->nullable();
			$table->string('descricao', 45)->nullable();
			$table->float('preco', 10, 0)->nullable();
			$table->integer('quantidade')->nullable();
			$table->enum('estado', array('DISPONIVEL','VENDIDO','INDISPONIVEL','DESACTIVO'));
			$table->integer('produtos_id')->nullable()->index('fk_ofertas_produtos1_idx');
			$table->integer('unidades_medidas_id')->index('fk_ofertas_unidades_medidas1_idx');
			$table->integer('produtores_id')->index('fk_ofertas_produtores1_idx');
			$table->timestamps();
			$table->softDeletes();
			$table->enum('negociavel', array('SIM','NAO'))->nullable();
			$table->integer('visualizacoes')->nullable();
			$table->integer('distritos_id')->index('fk_ofertas_distritos1_idx');
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

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         factory(\App\User::class, 60)->create();
//         factory(\App\Models\Localizacao::class, 30)->create();
//         factory(\App\Models\Mercado::class, 5)->create();
//         factory(\App\Models\Cadastrador::class, 5)->create();
//         factory(\App\Models\Revendedor::class, 20)->create();
//         factory(\App\Models\TelefoneRevendedor::class, 40)->create();
//         factory(\App\Models\Produtor::class, 20)->create();
//         factory(\App\Models\TelefoneProdutor::class, 40)->create();
         factory(\App\Models\Categoria::class, 5)->create();
//         factory(\App\Models\UnidadeMedida::class, 7)->create();
         factory(\App\Models\Produto::class, 45)->create();
//         factory(\App\Models\Variedade::class, 60)->create();
//         factory(\App\Models\Epoca::class, 60)->create();
//         factory(\App\Models\Procura::class, 60)->create();
//         factory(\App\Models\Interesse::class, 60)->create();
//         factory(\App\Models\Produz::class, 60)->create();
//         factory(\App\Models\Disponibilidade::class, 20)->create();
//         factory(\App\Models\Oferta::class, 30)->create();
//         factory(\App\Models\Reserva::class, 30)->create();

    }
}

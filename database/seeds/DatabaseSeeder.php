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
         factory(\App\User::class, 61)->create();
         factory(\App\Models\Provincia::class, 11)->create();
         factory(\App\Models\Distrito::class, 140)->create();
         factory(\App\Models\Mercado::class, 6)->create();
         factory(\App\Models\Cadastradore::class, 5)->create();
         factory(\App\Models\Revendedore::class, 20)->create();
         factory(\App\Models\Produtore::class, 20)->create();
         factory(\App\Models\Categoria::class, 5)->create();
         factory(\App\Models\UnidadesMedida::class, 7)->create();
         factory(\App\Models\Produto::class, 45)->create();
         factory(\App\Models\Procura::class, 60)->create();
         factory(\App\Models\Interess::class, 60)->create();
         factory(\App\Models\Produz::class, 60)->create();
         factory(\App\Models\Oferta::class, 30)->create();
         factory(\App\Models\Imagen::class, 130)->create();

    }
}

<?php

use Illuminate\Database\Seeder;

class CategoriaSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$categorias = factory(App\Models\Categoria::class, 5)
        	->create()
        	->each(function($categoria){
        		$categoria->productos()->save(factory(App\Models\Producto::class)->make());
        	});
    }
}

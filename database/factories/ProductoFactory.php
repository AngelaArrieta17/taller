<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
    	'stock' => $faker->randomDigit,
    	'categoria_id' => function (){
    		return factory(App\Models\Categoria::class)->create()->id;
    	}
    ];
});

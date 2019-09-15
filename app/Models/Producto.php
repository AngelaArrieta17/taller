<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = [
    	'nombre',
    	'stock',
    	'categoria_id'
     
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function categoria()
    {
    	return $this->belongsTo('App\Models\Categoria');
    }

}

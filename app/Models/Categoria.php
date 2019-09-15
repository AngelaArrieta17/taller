<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
    	'nombre',
    	'descripcion',
    	'detalle'
     
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = ['detalle' => 'array'];

    protected $appends = ['nombre_id' , 'listado_productos'];


    public function productos()
    {
    	return $this->hasMany('App\Models\Producto');
    }

    public function getNombreIdAttribute()
    { 
       return "{$this->nombre} {$this->id}";
    }

    public function getListadoProductosAttribute(){
    	return $this->productos;
    }

     public function setDescripcionAttribute($value)
    {
        $this->attributes['descripcion'] = strtolower($value);
    }
}

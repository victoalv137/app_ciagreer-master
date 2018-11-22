<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventilador extends Model
{
    protected $fillable=['costo','marca','modelo','capacidad','medida'];
    public function producto()
    {
        return $this->belongsTo('App\Producto','producto_id','id');
    }
    protected $table = 'ventilador';
}

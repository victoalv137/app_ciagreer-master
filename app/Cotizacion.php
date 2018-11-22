<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    protected $fillable=[''];

    public function producto()
    {
        return $this->belongsTo('App\Producto','producto_id','id');
    }
    public function cliente()
    {
        return $this->belongsTo('App\Cliente','cliente_id','id');
    }
    public function alquiler()
    {
        return $this->belongsTo('App\Alquiler','cotizacion_id','id');
    }
    protected $table = 'cotizacion';
}

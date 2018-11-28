<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable=['nombreComercial','ruc','giroNegocio','telefono','direccion'];
    public function cotizaciones(){
        return $this->hasmany('App\Cotizacion','cliente_id','id');
    }
    public function alquiler()
    {
        return $this->hasOne('App\Alquiler','cliente_id','id');
    }
    public function venta()
    {
        return $this->belongsTo('App\Cliente','cliente_id','id');
    }
    public function ventas(){
        return $this->hasmany('App\Venta','cliente_id','id');
    }
   
    protected $table = 'cliente';
}

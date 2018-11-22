<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable=['nombreComercial','ruc','giroNegocio','telefono','direccion'];
    public function cotizaciones(){
        return $this->hasmany('App\Cotizacion','cliente_id','id');
    }
    protected $table = 'cliente';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable=['nombreComercial','ruc','giroNegocio','telefono','direccion'];
 	
    protected $table = 'cliente';
}

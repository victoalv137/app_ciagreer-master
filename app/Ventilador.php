<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventilador extends Model
{
    protected $fillable=['codigo','costo','marca','modelo','capacidad','medida'];
 	
    protected $table = 'ventilador';
}

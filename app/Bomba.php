<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bomba extends Model
{
    protected $fillable=['codigo','costo','marca','modelo','alto','peso','ancho','velocidad'];
 	
    protected $table = 'bomba';
}

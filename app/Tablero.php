<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tablero extends Model
{
    protected $fillable=['codigo','costo','marca','modelo'];
 	
    protected $table = 'tablero';
}

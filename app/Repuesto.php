<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repuesto extends Model
{
    protected $fillable=['codigo','descripcion','marca','costo'];
    
   
    protected $table = 'repuesto';
}

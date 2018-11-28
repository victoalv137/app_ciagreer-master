<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable=['nombre','descripcion'];
     
    public function empleados(){
        return $this->hasmany('App\Area','area_id','id');
    }  
    protected $table = 'area';
}

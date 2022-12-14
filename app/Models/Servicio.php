<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    //relacion uno a muchos con la entidad fundaciones
    public function fundacions(){
        return $this->hasMany('App\Models\Fundaciones');
    }
}

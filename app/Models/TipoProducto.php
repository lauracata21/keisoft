<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    protected $fillable = [
        'tipoProducto',
    ];
    use HasFactory;
    public function productos(){
        return $this->hasMany('App\Models\Producto');
    }
}

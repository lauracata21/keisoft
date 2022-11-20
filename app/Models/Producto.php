<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable =[
        'tipoProducto_id',
        'user_id',
        'nombre',
        'precio',
        'descripcion',
        'fotoP',  
    ];
    public function tipo_producto() {
        return $this->belongsTo('Appp\Models\TipoProducto');
    }
     
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;
    protected $fillable =[
      'fundacion_id',
      'nombre',
      'fecha',
      'hora',
      'descripcion',
      'fotoM',  
  ];
    //relacion uno a muchos con la entidad fundaciones
    
    public function noticia() {
        return $this->belongsTo('Appp\Models\Noticia');
    
      }
}

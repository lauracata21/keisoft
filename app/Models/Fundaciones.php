<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundaciones extends Model
{
  protected $fillable = [
    'nombre',
    'direccion',
    'telefono',
    'nit',
    // 'comprobante_pdf',
    'servicio_id',
];

    use HasFactory;
    //relacion uno a muchos (inversa), entidades servicios y noticias
  public function servicio()
   {
      return $this->BelongsTo('Appp\Models\Servicio');
   }

  public function fundacions ()
  {
    return $this->hasMany('App\Models\Fundaciones');
  } 
  public function reporte_abusos ()
   {
     return $this->hasMany('App\Models\ReporteAbuso');
   }

 public function adopciones()
 {
   return $this->hasMany('App\Models\Adopcion');
 }

 public function convenios()
 {
   return $this->hasMany('App\Models\Convenio');
 }

 public function donacion() 
 {
   return $this->BelongsTo('Appp\Models\Donacion');
 }
}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        
        'nombre',
        'apellido',
        'role',
        'email',
        'password',
        'tipoIdentificacion',
        'numeroIdentificacion',
        'direccion',
        'fechaNacimiento',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //RELACION INVERSA CON LA TABLA TIPO PERSONA
    
   public function productos ()
    {
    return $this->hasMany('App\Models\Producto');
    }

    public function reporte_abusos ()
     {
        return $this->hasMany('App\Models\ReporteAbuso');
     }

    // public function adopciones()
    //  {
    //     return $this->hasMany('App\Models\Adopcion');
    //  }

    public function convenios()
     {
        return $this->hasMany('App\Models\Convenio');
     }
      //ENCRIPTAR LA CONTRASEÑA
     public function setPasswordAttribute($password)
     {
         $this->attributes['password']=bcrypt($password);
     }
}

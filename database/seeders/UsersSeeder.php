<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=User::create([
            'nombre'=>'Gisell',
            'apellido'=>'Londoño',
            'role'=>'admin',
            'email'=>'admingisell@gmail.com',
            'password'=>'adsi5226',
            'tipoIdentificacion'=>'Cedula de ciudadania',
            'numeroIdentificacion'=>'10029932',
            'direccion'=>'Lomas',
            'fechaNacimiento'=>'2002-10-25',
        ]);
        $users=User::create([
            'nombre'=>'Laura',
            'apellido'=>'Valencia',
            'role'=>'admin',
            'email'=>'adminlaura@gmail.com',
            'password'=>'adsi5226',
            'tipoIdentificacion'=>'Cedula de ciudadania',
            'numeroIdentificacion'=>'100202982',
            'direccion'=>'El arenal',
            'fechaNacimiento'=>'2012-10-15',
        ]);
        $users=User::create([
            'nombre'=>'Fundacionx',
            'apellido'=>'x',
            'role'=>'fundacion',
            'email'=>'fundacionx@gmail.com',
            'password'=>'fun5226',
            'tipoIdentificacion'=>'Nit',
            'numeroIdentificacion'=>'1002322',
            'direccion'=>'Lomas',
            'fechaNacimiento'=>'2010-10-15',
        ]);
        
    }
}

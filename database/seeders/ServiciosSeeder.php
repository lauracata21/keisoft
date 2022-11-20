<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ser=Servicio::create([
            'nombre'=>'Vacunacion',
        ]);
        $ser=Servicio::create([
            'nombre'=>'Esterilizacion',
        ]);
        $ser=Servicio::create([
            'nombre'=>'Adopciones',
        ]);
        $ser=Servicio::create([
            'nombre'=>'Todos',
        ]);
    }
}

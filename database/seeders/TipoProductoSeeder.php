<?php

namespace Database\Seeders;

use App\Models\TipoProducto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto=TipoProducto::create([
            'tipoProducto'=>'Alimentos',
        ]);
        $producto=TipoProducto::create([
            'tipoProducto'=>'Ropa',
        ]);
        $producto=TipoProducto::create([
            'tipoProducto'=>'Productos de aseo',
        ]);
        $producto=TipoProducto::create([
            'tipoProducto'=>'Juguetes',
        ]);
    }
}

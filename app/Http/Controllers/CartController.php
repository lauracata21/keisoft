<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shop()
    {
        $products = Producto::all();
        return view('shop')->withTitle('KeiSoft | SHOP')->with(['products' => $products]);
    }

    public function cart()  {
        
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('cart')->withTitle('KeiSoft | CART')->with(['cartCollection' => $cartCollection]);;
    }
    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'El producto ha sido eliminado');
    }

    public function add(Request $request){
        \Cart::add(array(
            // 'tipoPoducto_id',
            // 'user_id',
            
            'name'=> $request->name,
            'price'=> $request->price,
            'quantity'=> $request->quantity,
            'id' => $request->id,
            'attributes' => array(
            'fotoP' => $request->fotoP,
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Producto Agregado a sú Carrito!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'El carrito esta actualizado');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'El carrito esta vacio');
    }
}

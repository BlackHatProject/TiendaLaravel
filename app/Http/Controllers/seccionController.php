<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class seccionController extends Controller
{
    //

    public function agregarCarrito(request $request){
        request()->session()->push('carrito', request()->only('titulo', 'id'));
        return redirect('productos');
    }

    public function carritoCount() {
        $carrito = session()->get('carrito');
        if ($carrito == null || $carrito == False) {
            echo '0';
        }
        else {
            $cantidad = sizeof($carrito);
            echo $cantidad;
        }

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;

class JsonProductosController extends Controller
{
    //
    function mostrar()
    {
        $productos = productos::orderBy('id', 'DESC')->get();
        $datos = array();
        foreach($productos as $producto){
            $datos[] = array(
                "id" => $producto['id'],
                "titulo" => $producto['titulo'],
                "cantidad" => $producto['cantidad'],
                "precio" => $producto['precio'],
                "imagen" => $producto['imagen']
            );
        };
        return response()->json($datos);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('productos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
         $insertar = request()->except('_token');
        if($request->hasFile('imagen')){
            $insertar['imagen'] = $request->file('imagen')->store('', 'public');
        }

        productos::insert($insertar);
        return redirect('productos');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $producto = productos::findOrFail($id);
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $productos = productos::findOrFail($id);
        return view('productos.edit', compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
        $editar = request()->except('_token', '_method');

        productos::where('id','=',$id)->update($editar);

        return redirect('productos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        //
        productos::destroy($id);
        return redirect('productos');
    }
}

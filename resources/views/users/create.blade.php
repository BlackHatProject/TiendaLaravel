@extends('template')
    
@section('contenido')

    <div class="flex w-2/5 mx-auto justify-center relative bg-slate-200">

        <form action="{{url('/user')}}" method="post" enctype="multipart/form-data" class="relative">
            
            @csrf
            <div class="flex flex-col items-center p-4 text-slate-800">
                <div class="text-2xl p-4 mb-4">
                    <h1>Insertar Producto</h1>
                </div>
                <input type="text" name="name" class="text-lg m-4 w-80 bg-transparent border-slate-800 border-b-2 p-1" placeholder="Nombre de Usuario">
                <input type="email" name="email" class="text-lg m-4 w-80 bg-transparent border-slate-800 border-b-2 p-1" placeholder="Correo Electronico">
                <input type="password" name="password" class="text-lg m-4 w-80 bg-transparent border-slate-800 border-b-2 p-1" placeholder="Clave">
                <input type="password" name="password2" class="text-lg m-4 w-80 bg-transparent border-slate-800 border-b-2 p-1" placeholder="Repita Clave">
                <button class="p-2 mx-4 rounded-sm bg-slate-800 text-white">Ingresar</button>
            </div>
        </form>

    </div>

@endsection
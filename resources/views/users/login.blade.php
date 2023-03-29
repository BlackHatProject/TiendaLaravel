@extends('template')
    
@section('contenido')

    <div class="flex w-2/5 mx-auto flex-col justify-center relative bg-slate-200">

        

        <form action="{{url('/login')}}" method="post" enctype="multipart/form-data" class="relative">
            
            @csrf
            <div class="flex flex-col items-center p-6 text-slate-800">
                <div class="text-2xl p-4 mb-4">
                    <h1>Iniciar Seccion</h1>
                </div>
                <input type="email" name="email" class="text-lg m-4 w-80 bg-transparent border-slate-800 border-b-2 p-1" placeholder="Email@example.com">
                @error('email')
                    <div class="w-full bg-red-400 m-2 p-4 border-red-100 border-sm rounded-md">
                        <p class="text-sm text-white">{{$message}}</p>
                    </div>
                @enderror
                <input type="password" name="password" class="text-lg m-4 w-80 bg-transparent border-slate-800 border-b-2 p-1" placeholder="contraseña">
                @error('password')
                    <div class="w-full bg-red-400 m-2 p-4 border-red-100 border-sm rounded-md">
                        <p class="text-sm text-white">{{$message}}</p>
                    </div>
                @enderror
                <button class="p-2 rounded-sm bg-slate-800 text-lg text-white">Ingresar</button>
            </div>
        </form>

        <p class="text-md text-black m-2 text-center">¿No está registrado?</p>

        <a class="text-sm text-slate-800 m-2 text-center mb-4" href="">Registrase</a>

    </div>

@endsection
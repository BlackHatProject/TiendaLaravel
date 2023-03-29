@extends('template')
    
@section('contenido')

    <div class="flex w-2/5 mx-auto justify-center relative bg-slate-200">

        <form action="{{url('/productos')}}" method="post" enctype="multipart/form-data" class="relative">
            @include('productos/form')
        </form>

    </div>

    <script src="{{ asset('js/validar-productos.js')}}"></script>

@endsection
@extends('template')
    
@section('contenido')

    <div class="flex w-2/5 mx-auto justify-center relative bg-slate-200">

        <form action="{{url('/productos/'.$productos->id)}}" method="post" enctype="multipart/form-data" class="relative">
            {{method_field('PUT')}}
            @include('productos/form')
        </form>

    </div>

@endsection
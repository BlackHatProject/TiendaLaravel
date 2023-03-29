@extends('template')

@section('contenido')       

    <div class="container mx-auto flex w-full">

        <div class="w-2/4 p-2">
            <div class="w-full h-3/4 bg-slate-800 px-2">
                <img class="h-full object-cover mx-auto" src="/storage/{{$producto->imagen}}" alt="">
            </div>

            <div>
                <form class="w-1/3 flex justify-center mx-auto border-4 border-slate-800 whadow-md rounded-lg p-4" action="{{url('session/carrito')}}" method="post">
                    @csrf
                    <input type="hidden" name="titulo" value="{{$producto->titulo}}"><input type="hidden" name="id" value="{{$producto->id}}">
                    <button type="submit">Agregar al carrito</button>
                </form>
            </div>
        </div>


        <div class="w-2/4 p-2">
            <h1 class="text-2xl text-slate-800 font-bold my-4 p2">{{$producto->titulo}}</h1>
            <p class="text-2xl text-green-800 font-bold my-4 p-2">{{$producto->precio}}$</p>
            <p class="text-lg text-slate-600 m-2">En stock: {{$producto->cantidad}}</p>
            <p class="text-xl p-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis doloremque repudiandae, amet ea reiciendis distinctio deserunt pariatur aliquam eveniet cumque nulla accusamus dolorum cum dolores suscipit beatae. Enim, commodi fugiat!Nostrum perferendis perspiciatis quibusdam est, eligendi pariatur animi id? Ipsum iure voluptates ipsam eligendi nesciunt sunt, enim unde similique ipsa fugit? Et aliquid vel quibusdam modi, ab porro laborum accusamus!</p>
        </div>

    </div>
    
@endsection
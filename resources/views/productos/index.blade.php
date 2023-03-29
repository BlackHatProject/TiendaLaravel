@extends('template')
    
@section('contenido')

<div class="w-full flex">

    <div class="p-2 w-33 bg-slate-200 shadow w-1/5 mr-1">
        <form class="p-2 mb-4" action="">
            <p class="text-sm p-1">Ordenar por</p>
            <select class="text-sm bg-transparent border-b-2 border-slate-800" name="" id="">
                <option value="desc">Mas Recientes</option>
                <option value="asc">Mas antiguos</option>
            </select>
        </form>

        <form class="p-2" action="">
            <label class="text-sm p-1" for="">Valor Minimo</label>
            <input class="text-sm p-1 bg-transparent border-b-2 border-slate-800 p-0 mb-2" type="text">
            <label class="text-sm p-1" for="">Valor Maximo</label>
            <input class="text-sm p-1 bg-transparent border-b-2 border-slate-800 p-0" type="text">
            
        </form>

    </div>

    <div class="p-2 w-full" id="section-productos">

    </div>

    <script>
        var mostrador = document.getElementById('section-productos')
        fetch("jsonproductos/mostrar", {
            
            method: 'GET', 
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
        })
          .then(res => res.text())
          .then(res => {
            var datos  = JSON.parse(res)
            var lista = ''

            datos.forEach(dato => {
                lista = `
                <a href="{{url('productos/${dato.id}')}}">
                    <div class="relative flex w-full p-2 mb-2 shadow-md">
                        <img class="max-w-40 max-h-40 mr-2 object-cover" src="storage/${dato.imagen}" alt="">

                        <div class="flex flex-col w-full">
                            <div>
                                <h1 class="text-2xl font-bold center my-2">${dato.titulo}</h1>
                            </div>
                            <div class="flex flex-col w-full">
                            
                                <p class="text-lg my-1">Precio: <b>${dato.precio}$</b></p>
                                <p class="text-md text-slate-400 my-1">En Stock: ${dato.cantidad}</p>
                                @if(auth()->check())
                                    @if(auth()->user()->type <> 0)
                                    <div class="absolute flex flex-col right-2 bottom-2">
                                        <a 
                                            class="text-md text-center bg-green-400 text-slate-800 rounded-sm py-1 px-2 m-1" 
                                            href="{{url('productos/${dato.id}/edit')}}"
                                        >editar</a>
                                        <form action="{{url('productos/${dato.id}')}}" method="post" class="text-md bg-red-400 text-slate-800 rounded-sm py-1 px-2 m-1 z-index-40">
                                            {{method_field('DELETE')}}
                                            @csrf
                                            <input type="submit" value="Eliminar">
                                        </form>
                                    </div>
                                    @endif
                                @endif
                                
                            
                            </div>

                            

                        </div>
                    </div>

                </a>
                `
                mostrador.innerHTML += lista
                
            })
            
          })

        var carritoCount = document.getElementById('carrito-cantidad')
        fetch("session/carritoCount", {         
            method: 'GET', 
        })
          .then(res => res.text())
          .then(res => carritoCount.innerHTML = res)
    </script>

</div>

@endsection

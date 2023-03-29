<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>

    <header class="w-full bg-slate-800 border-b-4 border-slate-600 shadow z-40 fixed top-0 p-2">
        <div class="flex w-full justify-between items-center text-white z-40">
            <h1 class="text-2xl p-2"><a href="{{url('productos')}}">Tienda</a></h1>
            <nav class="flex px-2">
                
                @if(auth()->check())
                    @if(auth()->user()->type == 1)
                        <a class="p-2 mx-1" href="{{url('productos/create')}}">insertar producto</a>
                    @endif
                
                <a class="p-2 mx-1" href="{{url('logout')}}">Logout</a>
                <a class="flex items-center p-2 mx-1" href="">
                    <img class="w-6 h-6 mr-1" src="{{ asset('img/cart.png') }}" alt="">
                    <p id="carrito-cantidad"></p>
                </a>
                @else
                    <img class="w-10 h-10 p-1" src="{{ asset('img/user.png') }}" alt="">
                    <a class="p-2 mx-1" href="{{url('user/create')}}">sign in</a>
                    <a class="p-2 mx-1" href="{{url('login')}}">Login</a>
                @endif
            </nav>
        </div>
    </header>
    
    <div class="w-full mt-20 z-30">
        @yield('contenido')
    </div>

</body>
</html>
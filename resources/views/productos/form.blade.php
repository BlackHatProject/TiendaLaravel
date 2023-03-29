    @csrf
    <div class="flex flex-col items-center p-4 text-slate-800">
        <div class="text-2xl p-4 mb-4">
            <h1>Insertar Producto</h1>
        </div>
        <input type="text" name="titulo" class="text-lg m-4 w-80 bg-transparent border-slate-800 border-b-2 p-1" placeholder="Nombre del producto" value="{{ isset($productos->titulo) ? $productos->titulo:'' }}">
        <input type="text" name="cantidad" class="text-lg m-4 w-80 bg-transparent border-slate-800 border-b-2 p-1" placeholder="cantidad en stock" value="{{ isset($productos->cantidad) ? $productos->cantidad:'' }}">
        <input type="text" name="precio" class="text-lg m-4 w-80 bg-transparent border-slate-800 border-b-2 p-1" placeholder="precio del porducto" value="{{ isset($productos->precio) ? $productos->precio:'' }}">
        <input type="text" name="categoria" class="text-lg m-4 w-80 bg-transparent border-slate-800 border-b-2 p-1" placeholder="Categoria" value="{{ isset($productos->categoria) ? $productos->categoria:'' }}">
        <img class="w-full max-h-80 p-4" src="/storage/{{ isset($productos->imagen) ? $productos->imagen:'' }}" alt="">
        <input type="file" name="imagen" class="m-4"  accept="image/*">
        <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
        <button class="p-2 mx-4 rounded-sm bg-slate-800 text-white">Agregar producto</button>
    </div>
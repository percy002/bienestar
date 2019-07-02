@extends('layouts.app')

{{-- reemplazar a yield(content) por este contenido --}}
@section('content')

{{-- en esta linea agrega todo el navbar --}}
@include('partials.navbar')

    <main role="main" class="flex-shrink-0">
        <div class="container">
          <h1 class="mt-5">Usuarios</h1>
          <p><a href="{{route('usuario.create')}}">Nuevo usuario</a></p>
          @if (!empty($usuarios))
            
              @foreach ($usuarios as $u)
              <div class="media text-muted pt-2"> 
                  <p>{{$u->DNI}} - {{$u->nombre}} - {{$u->paterno}} - {{$u->materno}} - {{$u->genero}} - {{$u->correo}} - {{$u->direccion}}</p>
                  <a class="btn btn-sm btn-primary" href="{{route('usuario.edit',['id'=>$u->idUsuario])}}">Editar</a>
                  <form action="{{route('usuario.destroy',$u->idUsuario)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Eliminar</button>
                </form>
            </div>   

                  {{-- <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">{{$tarea->titulo}} - {{$tarea->descripcion}}</p>
                    <a class="btn btn-sm btn-primary" href="{{route('tareas.edit',['id'=>$tarea->id])}}">Editar</a>
                    <form action="{{route('tareas.destroy',$tarea->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-sm btn-danger">Eliminar</button>
                  </form> --}}
                    {{-- <p>{{$tarea->numero}}</p>
                    <p>{{$tarea->aleatorio}}</p>
                    <p>{{$tarea->imagen}}</p> --}}
              @endforeach
          @endif
          {{-- @foreach ($usuarios as $u)
              <p>{{$u->DNI}}</p>
          @endforeach --}}
             {{-- @foreach ($tareas as $tarea)
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">{{$tarea->titulo}} - {{$tarea->descripcion}}</p>
                    <a class="btn btn-sm btn-primary" href="{{route('tareas.edit',['id'=>$tarea->id])}}">Editar</a>
                    <form action="{{route('tareas.destroy',$tarea->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                </div>
                  
            @endforeach --}}
        
          
        </div>
    </main>

@endsection
@extends('layouts.app')

{{-- reemplazar a yield(content) por este contenido --}}
@section('content')

{{-- en esta linea agrega todo el navbar --}}
@include('partials.navbar')

    <main role="main" class="flex-shrink-0">
        <div class="container">
          <h1 class="mt-5">alumnos</h1>
          <p><a href="{{route('alumno.create')}}">Alumnos</a></p>
          @if (!empty($alumnos))
            
              @foreach ($alumnos as $a)
              <div class="media text-muted pt-2"> 
                  <p>{{$a->dni}} - {{$a->idAlumno}} - {{$a->paterno}} - {{$a->materno}} - {{$a->genero}} - {{$a->correo}} - {{$a->direccion}}</p>
                  <a class="btn btn-sm btn-primary" href="{{route('alumno.edit',['id'=>$a->idAlumno])}}">Editar</a>
                  <form action="{{route('alumno.destroy',$a->idAlumno)}}" method="POST">
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
          {{-- @foreach ($alumnos as $a)
              <p>{{$a->DNI}}</p>
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
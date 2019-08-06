@extends('layouts.invariable')

{{-- reemplazar a yield(content) por este contenido --}}
@section('content')

{{-- en esta linea agrega todo el navbar --}}
    <div class="body-item">
        <div class="body-item-1">
            <h1>Listado de estudiantes </h1>
            <form class="form-inline ">
                <button class="btn btn-outline-success mr-1" type="submit"><span class="icon-search"></span></button>
                <input class="form-control mr-3 " type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
        <div class="body-item-2 d-flex justify-content-end mt-2">
                <button type="button " class="btn btn-primary mr-3" onclick="location.href='{{route('bienestar.create')}}'">Agregar alumno</button>

        </div>
        <div class="body-item-3 mt-5">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Carrera</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumnos as $alumno)
                            <tr>
                            <th scope="row">{{$alumno->dni}}</th>
                            <td>{{$alumno->paterno}} {{$alumno->materno}}</td>
                            <td>{{$alumno->nombre}}</td>
                            <td>{{$alumno->carrera->NombreCarrera}}</td>
                            <td class="d-flex justify-content-end">
                                @if (auth()->user()->rol=='1')
                                    <button type="button " class="btn btn-warning " onclick="location.href='{{route('bienestar.edit',['id'=>$alumno->idAlumno])}}'"><span class="icon-pencil"></span></button>
                                    <button type="button" class="btn btn-danger mx-2"><span class="icon-bin"></span></button>
                                    <button type="button " class="btn  btn-success " onclick="location.href='{{route('operacion.show',['id'=>$alumno->idAlumno])}}'">Operacion</button>

                                @else
                                @switch(auth()->user()->rol)
                                    @case(2)
                                    <button type="button " class="btn  btn-success " onclick="location.href='{{route('economico',['id'=>$alumno->idAlumno])}}'">Operacion</button>

                                        @break
                                    @case(3)
                                    <button type="button " class="btn  btn-success " onclick="location.href='{{route('psicologico',['id'=>$alumno->idAlumno])}}'">Operacion</button>

                                        @break
                                    @case(4)
                                    <button type="button " class="btn  btn-success " onclick="location.href='{{route('medico',['id'=>$alumno->idAlumno])}}'">Operacion</button>

                                    @break
                                    @case(5)
                                    <button type="button " class="btn  btn-success " onclick="location.href='{{route('tutoriaConsejeria',['id'=>$alumno->idAlumno])}}'">Operacion</button>

                                    @break
                                        
                                @endswitch
                                    
                                
                                @endif
                                
                            </td>
                            </tr> 
                        @endforeach  
                    </tbody>
                </table>
        </div>
    </div>

@endsection
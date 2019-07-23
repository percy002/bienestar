@extends('layouts.invariable')

{{-- reemplazar a yield(content) por este contenido --}}
@section('content')
<!-- modificar esta parte  -->
        
<h1 class="d-flex justify-content-center">Registro de estudiante</h1>
<form action="{{$action}}" method="POST" class="mt-5">
    {{ csrf_field() }}
    <div class="form-group row ">
        <label  class="col-sm-4 pl-5 col-form-label">DNI</label>
        <div class="col-sm-4  ">
            <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI" value="{{$alumno->dni}}">
        </div>
    </div>   
    <div class="form-group row">
        <label  class="col-sm-4 pl-5 col-form-label">Nombre</label>
        <div class="col-sm-7  ">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{$alumno->nombre}}">
        </div>
    </div> 
    <div class="form-group row">
        <label  class="col-sm-4 pl-5 col-form-label">Apellido Paterno</label>
        <div class="col-sm-7  ">
            <input type="twxt" class="form-control" id="paterno" name="paterno" placeholder="Apellidos paterno" value="{{$alumno->paterno}}">
        </div>
    </div> 
    <div class="form-group row">
        <label  class="col-sm-4 pl-5 col-form-label">Apellido Materno</label>
        <div class="col-sm-7  ">
            <input type="twxt" class="form-control" id="materno" name="materno" placeholder="Apellidos materno" value="{{$alumno->materno}}">
        </div>
    </div>     
    <fieldset class="form-group ">
        <div class="row">
            <legend class="col-form-label col-sm-4 pt-0 pl-5">genero</legend>
            <div class="col-sm-7 ">
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="genero" id="genero" value="m" >
                    <label class="form-check-label" for="gridRadios1">M</label>
                </div>
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="genero" id="genero">
                    <label class="form-check-label" for="gridRadios2">F</label>
                </div>
            </div>
        </div>
    </fieldset> 
    <div class="form-group row">
        <label  class="col-sm-4 pl-5 col-form-label">Telefono</label>
        <div class="col-sm-7  ">
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="{{$alumno->telefono}}">
        </div>
    </div> 
    <div class="form-group row">
        <label  class="col-sm-4 pl-5 col-form-label">direccion</label>
        <div class="col-sm-7  ">
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion" value="{{$alumno->direccion}}">
        </div>
    </div> 
    <div class="form-group row">
        <label  class="col-sm-4 pl-5 col-form-label">Email</label>
        <div class="col-sm-7  ">
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Email" value="{{$alumno->correo}}">
        </div>
    </div> 
    <div class="form-group row">
        <label  class="col-sm-4 pl-5 col-form-label">Fecha de Nacimiento</label>
        <div class="col-sm-7  ">
            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="{{$alumno->fechaNacimiento}}">
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-sm-4 pl-5 col-form-label">Carrera Profeciona</label>
        <div class="col-sm-7  ">
                <div class="form-group col-md-12 p-0">
                        <select name="idCarreraProfesional" id="idCarreraProfesional" class="form-control">
                            <option value="0">selecciona</option>
                            @if (!empty($carreras))
                                @foreach ($carreras as $c)
                                    <option value="{{$c->idCarreraProfesional}}" >{{$c->NombreCarrera}}</option>
                                @endforeach
                            @endif
                        </select>
                </div>
        </div>
    </div>
    <div class="d-flex justify-content-end  pt-4">
            <button type="submit" class="btn btn-primary mx-5">Guardar</button>
            <button type="submit" class="btn btn-primary mr-5">Salir</button>
    </div>
    @if (!empty($put))
        <input type="hidden" name="_method" value="PUT">
    @endif
</form>
@endsection

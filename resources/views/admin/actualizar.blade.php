@extends('layouts.invariable')

{{-- reemplazar a yield(content) por este contenido --}}
@section('content')
<!-- modificar esta parte  -->
        
<h1 class="d-flex justify-content-center">Registro de estudiante</h1>
<form action="{{$action}}" method="POST" class="mt-5">
    {{ csrf_field() }}
    <div class="alert alert-danger">
        <p><strong>oops</strong></p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    <div class="form-group row ">
        <label  class="col-sm-4 pl-5 col-form-label">DNI</label>
        <div class="col-sm-4  ">
            <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI" value="{{$usuarios->dni}}">
        </div>
    </div>   
    <div class="form-group row">
        <label  class="col-sm-4 pl-5 col-form-label">Nombre</label>
        <div class="col-sm-7  ">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{$usuarios->nombre}}">
        </div>
    </div> 
    <div class="form-group row">
        <label  class="col-sm-4 pl-5 col-form-label">Apellido Paterno</label>
        <div class="col-sm-7  ">
            <input type="twxt" class="form-control" id="paterno" name="paterno" placeholder="Apellidos paterno" value="{{$usuarios->paterno}}">
        </div>
    </div> 
    <div class="form-group row">
        <label  class="col-sm-4 pl-5 col-form-label">Apellido Materno</label>
        <div class="col-sm-7  ">
            <input type="twxt" class="form-control" id="materno" name="materno" placeholder="Apellidos materno" value="{{$usuarios->materno}}">
        </div>
    </div>     
    <fieldset class="form-group ">
        <div class="row">
            <legend class="col-form-label col-sm-4 pt-0 pl-5">genero</legend>
            <div class="col-sm-7 ">
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="genero" id="genero" value="m" checked>
                    <label class="form-check-label" for="gridRadios1">Masculino</label>
                </div>
                <div class="form-check ml-3">
                    @if ($usuarios->genero=='f')
                    <input class="form-check-input" type="radio" name="genero" id="genero" value="f" checked>
                    @else
                    <input class="form-check-input" type="radio" name="genero" id="genero" value="f">
                    @endif
                    <label class="form-check-label" for="gridRadios2">Femenino</label>
                </div>
            </div>
        </div>
    </fieldset> 
    <div class="form-group row">
        <label  class="col-sm-4 pl-5 col-form-label">Telefono</label>
        <div class="col-sm-7  ">
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="{{$usuarios->telefono}}">
        </div>
    </div> 
    <div class="form-group row">
        <label  class="col-sm-4 pl-5 col-form-label">direccion</label>
        <div class="col-sm-7  ">
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion" value="{{$usuarios->direccion}}">
        </div>
    </div> 
    <div class="form-group row">
        <label  class="col-sm-4 pl-5 col-form-label">Email</label>
        <div class="col-sm-7  ">
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Email" value="{{$usuarios->correo}}">
        </div>
    </div> 
    <div class="form-group row">
        <label  class="col-sm-4 pl-5 col-form-label">Fecha de Nacimiento</label>
        <div class="col-sm-7  ">
            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="{{$usuarios->fechaNacimiento}}">
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-sm-4 pl-5 col-form-label">Rol</label>
        <div class="col-sm-7  ">
                <div class="form-group col-md-12 p-0">
                        <select name="idRoles" id="idRoles" class="form-control">
                                <option value="6">inabilitado</option>
                                <option value="1">administrador</option>
                                <option value="2">Becas</option>
                                <option value="3">Psicologico</option>
                                <option value="4">Medico</option>
                                <option value="5">Tutoria</option>
                                
                        </select>
                </div>
        </div>
    </div>
    <div class="d-flex justify-content-end  pt-4">
            <button type="submit" class="btn btn-primary mx-5">Guardar</button>
            <button type="button" class="btn btn-primary mr-5" onclick="location.href='{{route('bienestar.index')}}'">Salir</button>
    </div>
    @if (!empty($put))
        <input type="hidden" name="_method" value="PUT">
    @endif
</form>
@endsection

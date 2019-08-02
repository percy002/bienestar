@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
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
                                <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI">
                            </div>
                        </div>   
                        <div class="form-group row">
                            <label  class="col-sm-4 pl-5 col-form-label">Nombre</label>
                            <div class="col-sm-7  ">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label  class="col-sm-4 pl-5 col-form-label">Apellido Paterno</label>
                            <div class="col-sm-7  ">
                                <input type="twxt" class="form-control" id="paterno" name="paterno" placeholder="Apellidos paterno">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label  class="col-sm-4 pl-5 col-form-label">Apellido Materno</label>
                            <div class="col-sm-7  ">
                                <input type="twxt" class="form-control" id="materno" name="materno" placeholder="Apellidos materno">
                            </div>
                        </div>     
                        <fieldset class="form-group ">
                            <div class="row">
                                <legend class="col-form-label col-sm-4 pt-0 pl-5">genero</legend>
                                <div class="col-sm-7 ">
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="radio" name="genero" id="genero" value="m" checked>
                                        <label class="form-check-label" for="gridRadios1">M</label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="radio" name="genero" id="genero" value="f">
                                        <label class="form-check-label" for="gridRadios2">F</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset> 
                        <div class="form-group row">
                            <label  class="col-sm-4 pl-5 col-form-label">Telefono</label>
                            <div class="col-sm-7  ">
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label  class="col-sm-4 pl-5 col-form-label">direccion</label>
                            <div class="col-sm-7  ">
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label  class="col-sm-4 pl-5 col-form-label">Email</label>
                            <div class="col-sm-7  ">
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Email">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label  class="col-sm-4 pl-5 col-form-label">Fecha de Nacimiento</label>
                            <div class="col-sm-7  ">
                                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
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
                                                            <option value="{{$c->idCarreraProfesional}}"}}>{{$c->nombreCarrera}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                    </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-4 pl-5 col-form-label">contraseña</label>
                            <div class="col-sm-7  ">
                                <input type="text" class="form-control" id="password" name="password" placeholder="contraseña">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end  pt-4">
                                <button type="submit" class="btn btn-primary mx-5">Guardar</button>
                                <button type="" class="btn btn-primary mr-5">Salir</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

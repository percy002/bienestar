<form action="{{$action}}" method="POST" class="col-md-12 col-12">
    <div class="row">
        {{ csrf_field() }}
        <div class="col-12">
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" required="required" value="{{$alumnos->nombre}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">DNI</label>
                                <input type="text" name="dni" id="dni" class="form-control" required="required" value="{{$alumnos->dni}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Apellido Paterno</label>
                                <input type="text" name="paterno" id="paterno" class="form-control" required="required" value="{{$alumnos->paterno}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Apellido Materno</label>
                                <input type="text" name="materno" id="materno" class="form-control" required="required" value="{{$alumnos->materno}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Telefono</label>
                                <input type="text" name="telefono" id="telefono" class="form-control" required="required" value="{{$alumnos->telefono}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Direccion</label>
                                <input type="text" name="direccion" id="direccion" class="form-control" required="required" value="{{$alumnos->direccion}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Correo</label>
                                <input type="text" name="correo" id="correo" class="form-control" required="required" value="{{$alumnos->correo}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Carrera profesional</label>
                                <select name="carreraid" id="carreraid" class="form-control">
                                    <option value="0">selecciona</option>
                                    @if (!empty($carreras))
                                        @foreach ($carreras as $c)
                                            <option value="{{$c->idCarreraProfesional}}" {{$c->idCarreraProfesional ===$alumnos->carreraid ? 'select' : ''}}>{{$c->NombreCarrera}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Genero</label>
                                <input type="text" name="genero" id="genero" class="form-control" required="required" value="{{$alumnos->genero}}">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Fecha Nacimiento</label>
                                <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required="required" value="{{$alumnos->fechaNacimiento}}">
                            </div>
                        </div>
                        
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                            </div>
                        </div>
                        @if (!empty($put))
                            <input type="hidden" name="_method" value="PUT">
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
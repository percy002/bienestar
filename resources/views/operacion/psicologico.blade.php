@extends('operacion.index')
@section('operacion')
    
     <!-- en la opcion bienestarv economico solo cambia esta parate el resto es = -->    
     <div class="d-flex justify-content-center">
        <h1 class="mt-4">Bienestar Psicologico</h1>
    </div>
    <form form action="{{$action}}" method="POST">
        {{ csrf_field() }} 
        <input style="display:none" type="text" id="idOperacionBienestar" name="idOperacionBienestar" value="6"> 

        <input style="display:none" type="text" id="idAlumno" name="idAlumno" value="{{$alumno->idAlumno}}">
        <input style="display:none" type="text" id="fechaInicio" name="fechaInicio" value="{{date("Y-m-d")}}">
            <div class="beca-integral ml-3 mt-3">     
                <div class="form-group row">
                    <label  class="col-sm-3 ml-3 col-form-label">Fecha de consulta</label>
                    <div class="col-sm-5  ">
                        <input type="date" class="form-control" id="fechaFin">
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="col-md-12 ml-4 mt-5">
                            <p>Diagnostico</p>
                            <textarea name="comentarios" rows="5" cols="90" placeholder="Diagnostico"></textarea>
                    </div>
                    <div class="col-md-12 ml-4 mt-5">
                            <p>Observaciones</p>
                            <textarea name="comentarios" rows="5" cols="90" placeholder="Observaciones"></textarea>
                    </div>
                </div>                    
                <div class="d-flex justify-content-end  pt-4">
                    <button type="submit" class="btn btn-primary mx-5">Guardar</button>
                    @if (auth()->user()->idRoles==1)
                    <button type="button" class="btn btn-primary mr-5" onclick="location.href='{{route('operacion.show',['id'=>$alumno->idAlumno])}}'">Salir</button>
    
                    @else
                        <button type="button" class="btn btn-primary mr-5" onclick="location.href='{{route('bienestar.index')}}'">Salir</button>
    
                    @endif
                </div>
                <br>
                <br>
                <br>
            </div>  
    </form> 
@endsection
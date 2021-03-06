@extends('operacion.index')
@section('operacion')

     <!-- en la opcion bienestarv economico solo cambia esta parate el resto es = -->    
    <div class="d-flex justify-content-star ml-3">
            <h3 class="mt-4">Programa de Reincorporacion</h3>
    </div>     
     <form form action="{{$action}}" method="POST">
            {{ csrf_field() }}
            <input style="display:none" type="text" id="idAlumno" name="idAlumno" value="{{$alumno->idAlumno}}">
            <input style="display:none" type="text" id="idOperacionBienestar" name="idOperacionBienestar" value="5"> 
            <div class="beca-integral ml-3 mt-3"> 
                <div class="form-group row">
                    <label  class="col-sm-3 ml-3 col-form-label">Fecha del ultimo siclo</label>
                    <div class="col-sm-5  ">
                        <input type="date" class="form-control" id="fechaInicio" name="fechaInicio">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label  class="col-sm-3 ml-3 col-form-label">Fecha de reinicio</label>
                    <div class="col-sm-5  ">
                        <input type="date" class="form-control" id="fechaFin" name="fechaFin">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 ml-4 mt-5">
                            <p> Observaciones</p>
                            <textarea name="observaciones" rows="5" cols="90" placeholder="Observaciones"></textarea>
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

@extends('layouts.invariable')

{{-- reemplazar a yield(content) por este contenido --}}
@section('content')

{{-- en esta linea agrega todo el navbar --}}
<div class=" p-5 main-body">
        <div class="text-center ml-3">
                <h1 class="mt-4"> {{$h1}}</h1>
        </div> 
        
        <div class=" row mt-5">
            <div class="row col-12">
                <div class="col-12"><label for="">DNI :</label> <label for="">{{$alumno->alumno->dni}}</label></div>
            </div>
            <div class="row col-12">
                <div class="col-12"><label for="">Nombre :</label>  <label for="">{{$alumno->alumno->nombre}}</label> <label for="">{{$alumno->alumno->paterno}}</label> <label for="">{{$alumno->alumno->materno}}</label></div>
            </div>
            <div class="row col-12">
                <div class="col-3">
                        <div><label for="">genero : </label> <label for="">{{$alumno->alumno->genero}}</label></div>
                </div>
                <div class="col-3">
                        <div><label for="">Edad : </label> <label for=""> {{$edadActual}}</label></div>
                </div>
            </div>
            <div class="row col-12">
                <div class="col-3">
                        <div><label for="">telefono :</label> <label for="">{{$alumno->alumno->telefono}}</label> </div>

                </div>
                <div class="">
                        <div><label for="">direccion :</label> <label for="">{{$alumno->alumno->direccion}}</label> </div>
                </div>
            </div>
            <div class="row col-12">
                <div class="col-12"><label for="">correo :</label>  <label for="">{{$alumno->alumno->correo}}</label></div> 
            </div>
            <div class="row col-12">
                <div class="col-12"><label for="">Carrera profesional :</label> <label for="">{{$alumno->alumno->carrera->nombreCarrera}}</label></div>
            </div>
        </div>
        @foreach ($operacionesAlumno as $operacion)
        <h6 class="mb-0">============================================================</h6>
        <h4>{{$operacion->operacion->nombreOperacion}}</h4>
                <div>
                    <div><label for=" "></label>fecha de consulta:  <label for=""> {{$operacion->fechaFin}}</label></div>
                </div>
                @if ($operacion->idOperacionBienestar>=6)
                <div class="row">
                    <div class=" ml-3">
                          <h5>Diagnostico</h5>
                          <textarea name="comentarios" rows="1" cols="90" placeholder="Diacnostico" disabled="true" >{{$operacion->diagnostico}}</textarea>
                    </div>
                </div>
                @endif
                

                <div class="row">
                    <div class=" ml-3">
                          <h5>Observaciones</h5>
                    <textarea name="comentarios" rows="1" cols="90" placeholder="Observaciones" disabled="false">{{$operacion->observaciones}}</textarea>
                    </div>
                </div>
                @if ($operacion->idOperacionBienestar<6)
                <div>
                   <div><label for="">beca : </label> <label for=" "> Aceptada </label></div>
               </div>
                @endif
                @if ($operacion->idOperacionBienestar>=9)
                <div>
                   <div><label for="">beca : </label> <label for=" "> Rechazada </label></div>
               </div>
                @endif

                <div class="d-flex">
                    <div class="justify-content-end  pt-4 pb-3">
                        <a type="button" class="btn btn-secondary mr-5" onclick=" location.href='{{ route('reportes',auth()->user()->idRoles) }}' ">Salir</a>
                    </div>

                    <div class="d-flex justify-content-begin  pt-4 pb-3">
                        <a type="button" class="btn btn-secondary mr-5" target="_blank" href='{{route('imprimirReporteAlumno',['idAlumno'=>$operacion->alumno->idAlumno , 'idOperacionBienestar'=>$operacion->idOperacionBienestar])}}'>Imprimir</a>
                    </div>
                 </div>

                

        @endforeach
      

             
   

@endsection
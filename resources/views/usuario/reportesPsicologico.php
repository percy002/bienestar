@extends('layouts.invariable')

{{-- reemplazar a yield(content) por este contenido --}}
@section('content')

{{-- en esta linea agrega todo el navbar --}}
<div class=" p-5 main-body">
        <div class="text-center ml-3">
                <h1 class="mt-4"> Reporte  Psicologico </h1>
        </div> 
        @foreach ($operaciones as $operacion)
        <div class=" row mt-5">
            <div class="row col-12">
                <div class="col-12"><label for="">DNI :</label> <label for="">{{$operacion->alumno->dni}}</label></div>
            </div>
            <div class="row col-12">
                <div class="col-12"><label for="">Nombre :</label>  <label for="">{{$operacion->alumno->nombre}}</label> <label for="">{{$operacion->alumno->paterno}}</label> <label for="">{{$operacion->alumno->materno}}</label></div>
            </div>
            <div class="row col-12">
                <div class="col-3">
                        <div><label for="">genero : </label> <label for="">{{$operacion->alumno->genero}}</label></div>
                </div>
                <div class="col-3">
                        <div><label for="">Edad : </label> <label for=""> {{$operacion->alumno->edadActual}}</label></div>
                </div>
            </div>
            <div class="row col-12">
                <div class="col-3">
                        <div><label for="">telefono :</label> <label for="">{{$operacion->alumno->telefono}}</label> </div>

                </div>
                <div class="">
                        <div><label for="">direccion :</label> <label for="">{{$operacion->alumno->direccion}}</label> </div>
                </div>
            </div>
            <div class="row col-12">
                <div class="col-12"><label for="">correo :</label>  <label for="">{{$operacion->alumno->correo}}</label></div> 
            </div>
            <div class="row col-12">
                <div class="col-12"><label for="">Carrera profecional :</label> <label for="">{{$operacion->alumno->carrera->nombreCarrera}}</label></div>
            </div>
        </div>

        <h6 class="mb-0">============================================================</h6>
                <div>
                    <div><label for=" "></label>fecha de consulta:  <label for=""> 12/10/2017</label></div>
                </div>

                <div class="row">
                    <div class=" ml-3">
                          <h5>Diacnostico</h5>
                          <textarea name="comentarios" rows="1" cols="90" placeholder="Diacnostico" disabled="flase"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class=" ml-3">
                          <h5>Observaciones</h5>
                          <textarea name="comentarios" rows="1" cols="90" placeholder="Observaciones" disabled="flase"></textarea>
                    </div>
                </div>
                
                 <div class="d-flex justify-content-end  pt-4 pb-3">
                    <button type="button" class="btn btn-secondary mr-5" onclick=" location.href='RepoteEconomico.html' ">Salir</button>
                 </div>

        @endforeach
      

             
   

@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    {{-- <link href="{{ asset('./css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('/css/style3.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('./css/icon-style1.css') }}"> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>   --}}


    <title>Document</title>
</head>
<body>
        <div class="text-center ml-3">
                <h1 class="mt-4"> {{$h1}}</h1>
        </div> 
    <div class="container ">
            <div class="  mt-5">
                    <div class=" col-12">
                        <div class="col-12"><label for="">DNI :</label> <label for="">{{$alumno->alumno->dni}}</label></div>
                    </div>
                    <div class=" col-12">
                        <div class="col-12"><label for="">Nombre :</label>  <label for="">{{$alumno->alumno->nombre}}</label> <label for="">{{$alumno->alumno->paterno}}</label> <label for="">{{$alumno->alumno->materno}}</label></div>
                    </div>
                    <div class=" col-12">
                        <div class="col-3">
                                <div><label for="">genero : </label> <label for="">{{$alumno->alumno->genero}}</label></div>
                        </div>
                        <div class="col-3">
                                <div><label for="">Edad : </label> <label for=""> {{$edadActual}}</label></div>
                        </div>
                    </div>
                    <div class=" col-12">
                        <div class="col-3">
                                <div><label for="">telefono :</label> <label for="">{{$alumno->alumno->telefono}}</label> </div>
        
                        </div>
                        <div class="">
                                <div><label for="">direccion :</label> <label for="">{{$alumno->alumno->direccion}}</label> </div>
                        </div>
                    </div>
                    <div class=" col-12">
                        <div class="col-12"><label for="">correo :</label>  <label for="">{{$alumno->alumno->correo}}</label></div> 
                    </div>
                    <div class=" col-12">
                        <div class="col-12"><label for="">Carrera profesional :</label> <label for="">{{$alumno->alumno->carrera->nombreCarrera}}</label></div>
                    </div>
                </div>
              
      <!-- en la opcion bienestarv economico solo cambia esta parate el resto es = --> 
      
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
                          <label name="comentarios" ><h6>{{$operacion->diagnostico}}</h6></label>
                    </div>
                </div>
                @endif
                

                <div class="row">
                    <div class=" ml-3">
                          <h5>Observaciones</h5>
                    <label name="" >{{$operacion->observaciones}}</label>
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

                          

        @endforeach
                {{-- <h4 class="text-center">Beca-Integral Medias-Becas y Descuentos</h4>
                 <!--Beca integral  -->
                <h5 class="mb-0">Beca integral</h5>
                <div>
                    <div><label for=" "></label>fecha que se dio la beca :  <label for=""> 12/10/2017</label></div>
                </div>
                <div class="row">
                    <div class=" ml-3">
                            <textarea name="comentarios" rows="1" cols="90" placeholder="Observaciones" disabled="flase"></textarea>
                    </div>
                </div>
                <div>
                    <div><label for="">beca : </label> <label for=" "> Aceptada </label></div>
                </div>
                

                <!--Media beca  -->
                <h5 class="mb-0">Media beca</h5>
                <div>
                    <div><label for=" "></label>fecha que se dio la beca :  <label for=""> 12/10/2017</label></div>
                </div>
                <div class="row">
                    <div class=" ml-3">
                            <textarea name="comentarios" rows="1" cols="90" placeholder="Observaciones" disabled="flase"></textarea>
                    </div>
                </div>
                <div>
                    <div><label for="">beca : </label> <label for=" "> Aceptada </label></div>
                </div>


                <!-- Descuento Economico -->
                <h5 class="mb-0">Descuento Economico</h5>
                <div>
                    <div><label for=" "></label>fecha que se dio la beca :  <label for=""> 12/10/2017</label></div>
                </div>
                <div class="row">
                    <div class=" ml-3">
                            <textarea name="comentarios" rows="1" cols="90" placeholder="Observaciones" disabled="flase"></textarea>
                    </div>
                </div>
                <div>
                    <div><label for="">beca : </label> <label for=" "> Aceptada </label></div>
                </div>


                 <!-- Prorroga de pagos -->
                 <h4 class="mb-0 mt-5 text-center">Prorroga de pagos</h4>
                 <div class="mt-4">
                     <div>
                         <label for=" "></label>fecha inicio :  <label for=""> 12/10/2017</label>
                    </div>
                    <div>
                        <label for=" "></label>fecha fin    :  <label for=""> 12/10/2018</label>
                    </div>
                 </div>
                 <div class="row">
                     <div class=" ml-3">
                             <textarea name="comentarios" rows="1" cols="90" placeholder="Observaciones" disabled="flase"></textarea>
                     </div>
                 </div>
                 <div>
                     <div><label for="">beca : </label> <label for=" "> Aceptada </label></div>
                 </div>


                   <!-- Programa de Reincorporacion -->
                   <h4 class="mb-0 mt-5 text-center">Programa de Reincorporacion</h4>
                   <div class="mt-4">
                       <div>
                           <label for=" "></label>fecha inicio :  <label for=""> 12/10/2017</label>
                      </div>
                      <div>
                          <label for=" "></label>fecha fin :  <label for=""> 12/10/2018</label>
                      </div>
                   </div>
                   <div class="row">
                       <div class=" ml-3">
                               <textarea name="comentarios" rows="1" cols="90" placeholder="Observaciones" disabled="flase"></textarea>
                       </div>
                   </div>
                   <div>
                       <div><label for="">beca : </label> <label for=" "> Aceptada </label></div>
                   </div> --}}
        </div>
</div>
</body>
</html>
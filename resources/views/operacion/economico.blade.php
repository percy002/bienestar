@extends('layouts.invariable')

{{-- reemplazar a yield(content) por este contenido --}}
@section('content')
<!-- modificar esta parte  -->
        
<!-- solo se modifica esta parte -->
        <div class="main-datos">
            <div><label for="">DNI :</label></div>
            <div><label for="">{{$alumno->dni}}</label></div>

            <div><label for="">Nombre :</label></div>
            <div><label for="">{{$alumno->nombre}}</label></div>

            <div><label for="">Apellidos :</label></div>
            <div><label for="">{{$alumno->paterno}}</label> <label for="">{{$alumno->materno}}</label> </div>

            <div><label for="">genro :</label></div>
            <div><label for="">{{$alumno->genero}}</label></div>

            <div><label for="">telefono :</label></div>
            <div><label for="">{{$alumno->telefono}}</label></div>

            <div><label for="">direccion :</label></div>
            <div><label for="">{{$alumno->direccion}}</label></div>

            <div><label for="">correo :</label></div>
            <div><label for="">{{$alumno->correo}}</label></div>

            <div><label for="">Edad :</label></div>
            <div><label for="">{{$edadActual}}</label></div>

            <div><label for="">Carrera profecional :</label></div>
            <div><label for="">{{$alumno->carrera->nombreCarrera}}</label></div>
        </div>
        <!-- solo cambiar esta parte -->
        <div class="d-flex justify-content-center">
            <h1 class="mt-4">Bienestar Economico</h1>
        </div>
        <div class="d-flex justify-content-center mt-3">
            
                <button type="button" class="mx-1 ml-3   buton-bienestar-economico" onclick="location.href='{{route('becas',['id'=>$alumno->idAlumno])}}'">Beca-Integral   Medias-Becas y Descuentos</button>
                <button type="button" class="mx-1        buton-bienestar-economico" onclick="location.href='{{route('prorroga',['id'=>$alumno->idAlumno])}}'">Proroga de pagos</button>
                <button type="button" class="mx-1 mr-3   buton-bienestar-economico" onclick="location.href='{{route('reincorporacion',['id'=>$alumno->idAlumno])}}'">Programa de Reincorporacion</button>
        </div>
         <!-- en la opcion bienestarv economico solo cambia esta parate el resto es = -->

         @yield('operacion')

@endsection

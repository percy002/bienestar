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
            <h1 class="mt-4">Operaciones a realizar</h1>
        </div>
        <div class="d-flex justify-content-center mt-5">
                <button type="button" class="mx-4 buton-opciones-1" onclick="location.href='{{route('economico',['id'=>$alumno->idAlumno])}}'">
                    <div class="d-flex justify-content-star p-0  ml-3">
                        <h1>1</h1>
                    </div>
                    <span class="ml-3">Bienestar Economico</span>
                </button>
                <button type="button" class="mx-4 buton-opciones-2" onclick="location.href='{{route('psicologico',['id'=>$alumno->idAlumno])}}'">
                    <div class="d-flex justify-content-star p-0  ml-3">
                        <h1>2</h1>
                    </div>
                    <span class="ml-3">Bienestar psicologico</span>
                </button>
        </div>
        <div class="d-flex justify-content-center">
                <button type="button" class="mt-5 mx-4 buton-opciones-3" onclick="location.href='{{route('medico',['id'=>$alumno->idAlumno])}}'">
                    <div class="d-flex justify-content-star p-0  ml-3">
                        <h1>3</h1>
                    </div>
                    <span class="ml-3">Bienestar medico</span>
                </button>
                <button type="button" class="mt-5 mx-4 buton-opciones-4" onclick="location.href='{{route('tutoriaConsejeria',['id'=>$alumno->idAlumno])}}'">
                        <div class="d-flex justify-content-star p-0  ml-3">
                            <h1>4</h1>
                        </div>
                        <span class="ml-3">Bienestar en Tutoria y consejeria</span>
                </button>
        </div>
         <!-- en la opcion bienestarv economico solo cambia esta parate el resto es = -->

         @yield('operacion')

@endsection

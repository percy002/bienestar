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
          <!-- en la opcion bienestarv economico solo cambia esta parate el resto es = --> 
      <div class="body-item-3 mt-5">
        <table class="table table-striped table-hover" id="tabla_alumnos">
            <thead>
                <tr>
                    
                <th scope="col">Nro</th>
                <th scope="col">Dni</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Nombre</th>
                <th scope="col">Carreras</th>
                <th scope="col">Operacion</th>
                </tr>
            </thead>
            <tbody>
                {{$i=1}}
                @foreach ($operaciones as $operacion)
                    <tr>
                    {{-- <th scope="row">{{$operacion->alumno()->dni}}</th> --}}
                    <th scope="row">{{$i++}}</th>
                    <th scope="row">{{$operacion->alumno->dni}}</th>
                    <td>{{$operacion->alumno->paterno}} {{$operacion->alumno->materno}}</td>
                    <td>{{$operacion->alumno->nombre}}</td>
                    <td>{{$operacion->alumno->carrera->nombreCarrera}}</td>
                    <td>{{$operacion->operacion->nombreOperacion}}</td>
                    
                    </tr> 
                @endforeach  
            </tbody>
        </table>
</div>
      
                
        </div>
</div>
</body>
</html>
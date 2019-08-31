@extends('layouts.invariable')

{{-- reemplazar a yield(content) por este contenido --}}
@section('content')

{{-- en esta linea agrega todo el navbar --}}
    <div class="body-item">
        <div class="body-item-1">
            <h1>Listado de estudiantes </h1>
            <form class="form-inline ">
                <button class="btn btn-outline-success mr-1" type="submit"><span class="icon-search"></span></button>
                <input class="form-control mr-3 " type="search" placeholder="buscar" aria-label="Search" id="buscar" name="buscar">
            </form>
        </div>
        
        <u class="mx-2"><a href="{{route('imprimirAlumnos',['idRoles'=>auth()->user()->idRoles])}}">imprimir</a></u>
        <div class="body-item-3 mt-5">
                <table class="table table-striped table-hover" id="tabla_alumnos">
                    <thead>
                        <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Carreras</th>
                        <th scope="col">Operacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($operaciones as $operacion)
                            <tr>
                            {{-- <th scope="row">{{$operacion->alumno()->dni}}</th> --}}
                            <th scope="row">{{$operacion->alumno->dni}}</th>
                            <td>{{$operacion->alumno->paterno}} {{$operacion->alumno->materno}}</td>
                            <td>{{$operacion->alumno->nombre}}</td>
                            <td>{{$operacion->alumno->carrera->nombreCarrera}}</td>
                            <td>{{$operacion->operacion->nombreOperacion}}</td>
                            <td class="d-flex justify-content-end">
                                @if(auth()->user()->idRoles)
                                    {{-- <button type="button " class="btn btn-warning " onclick="location.href=''"><span class="icon-pencil"></span></button> --}}
                                    {{-- <form action="{{}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button  class="btn btn-danger mx-2"><span class="icon-bin"></span></button>
                                    </form> --}}
                                    @endif
                                    <button type="button " class="btn  btn-success " onclick="location.href='{{route('reporteXalumno',['idAlumno'=>$operacion->alumno->idAlumno , 'idOperacionBienestar'=>$operacion->idOperacionBienestar])}}'">Reporte</button>
                                    
                                
                                    
                                
                            </td>
                            </tr> 
                        @endforeach  
                    </tbody>
                </table>
        </div>
    </div>
    <script>  
            $(document).ready(function(){  
                 $('#buscar').keyup(function(){  
                      search_table($(this).val());  
                 });  
                 function search_table(value){  
                      $('#tabla_alumnos tr').each(function(){  
                           var found = 'false';  
                           $(this).each(function(){  
                                if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                                {  
                                     found = 'true';  
                                }  
                           });  
                           if(found == 'true')  
                           {  
                                $(this).show();  
                           }  
                           else  
                           {  
                                $(this).hide();  
                           }  
                      });  
                 }  
            });  
       </script>  
   

@endsection
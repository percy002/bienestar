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
        <div class="body-item-2 d-flex justify-content-end mt-2">
                <button type="button " class="btn btn-primary mr-3" onclick="location.href='{{route('register')}}'">Agregar alumno</button>

        </div>
        <div class="body-item-3 mt-5">
                <table class="table table-striped table-hover" id="tabla_alumnos">
                    <thead>
                        <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                            <th scope="row">{{$usuario->dni}}</th>
                            <td>{{$usuario->paterno}} {{$usuario->materno}}</td>
                            <td>{{$usuario->nombre}}</td>
                            <td class="d-flex justify-content-end">
                                    <button type="button " class="btn btn-warning " onclick="location.href='{{route('administrador.edit',['id'=>$usuario->id])}}'"><span class="icon-pencil"></span></button>
                                    <form action="{{route('administrador.destroy',$usuario->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button  class="btn btn-danger mx-2"><span class="icon-bin"></span></button>
                                    </form>
                                
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
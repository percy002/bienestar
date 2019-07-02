@extends('layouts.app')

{{-- reemplazar a yield(content) por este contenido --}}
@section('content')

{{-- en esta linea agrega todo el navbar --}}
@include('partials.navbar')

    <main role="main" class="flex-shrink-0">
        <div class="container">
          <h1 class="mt-5">Agregar Alumno</h1>
        <section class="content">
            <h4></h4>
                @include('layouts._form')
        </section>
        </div>
    </main>

@endsection
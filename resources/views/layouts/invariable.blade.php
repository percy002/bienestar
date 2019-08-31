<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- asset para direccionar los css e iconos --}}


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('./css/bootstrap.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('./css/style3.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/icon-style1.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  



    <title>Document</title>
</head>
<body>
    <div class="container-fluid ">
        <header class="con-header ">
                <div class="logo-gif">
                        <img src="http://americanadelcusco.edu.pe/wp-content/uploads/2017/11/logo.gif" alt="">
                    </div>
            <nav class="nav">
                <ul class="nav-ul"><a href='{{route('bienestar.index')}}'> INICIO </a></ul>
                <ul class="nav-ul"><a href=""> EL INSTITUTO</a></ul>
                <ul class="nav-ul"><a href=""> PROFESIONALIZACION</a></ul>
                <ul class="nav-ul"><a href=""> BIENESTAR ESTUDIANTIL</a></ul>
                <ul class="nav-ul"><a href=""> ADMISION</a></ul>
                <ul class="nav-ul"><a href=""> NOTICIAS</a></ul>
                <ul class="nav-ul"><a href=""> EVENTOS</a></ul>
                <ul class="nav-ul"><a href="">CONTACTOS</a></ul>

            </nav>
            <div class="linea-azul">
            </div>
        </header>
        <div class="layau">
            <div class="main-header">
                <h1>servicio de bienestar estudiantil</h1>
                <h2>{{auth()->user()->nombre}}</h2>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

            </div>
            <div class="main-aside">
               
                <div class="nav-aside">
                    <!-- <h4 class="pt-4">   <a href=""> <span class="icon-home"></span> inicio</a></h4> -->
                    <div class="accordion pt-3" id="accordionExample">
                          <div class="card">
                            <div class="card-header" id="headingOne">
                              <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"  aria-controls="collapseOne" onclick="location.href='{{route('bienestar.index')}}'">
                                  <span class="icon-home"></span> Inicio
                                </button>
                              </h2>
                            </div>
                            <!-- <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">
                                  <li class="nav-aside-subitem"><a class="nav-aside-link" href="">registro de estudiantes</a></li>
                                  <li><a class="nav-aside-link" href="">operaciones</a></li>
                              </div>
                            </div> -->
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo">
                              <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <span class="icon-file-text2"></span> Reportes
                                </button>
                              </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                              <div class="card-body">
                                @if(auth()->user()->idRoles==1)
                                      <li class="nav-aside-subitem"><a class="nav-aside-link" href="{{ route('reportes',auth()->user()->idRoles) }}"><span class="icon-file-text2"></span> Todos los alumnos</a></li>

                                      <li class="nav-aside-subitem"><a class="nav-aside-link" href="{{ route('reportes','2') }}"><span class="icon-file-text2"></span> Bienestar Economico</a></li>
                                      <li class="nav-aside-subitem"><a class="nav-aside-link" href="{{ route('reportes','3') }}"><span class="icon-file-text2"></span> Bienestar Psicologico</a></li>
                                      <li class="nav-aside-subitem"><a class="nav-aside-link" href="{{ route('reportes','4') }}"><span class="icon-file-text2"></span> Bienestar Asistencia Medica</a></li>
                                      <li class="nav-aside-subitem"><a class="nav-aside-link" href="{{ route('reportes','5') }}"><span class="icon-file-text2"></span> Bienestar Tutoria y Consegeria</a></li>
                                
                                        
                                @else
                                <li class="nav-aside-subitem"><a class="nav-aside-link" href="{{ route('reportes',auth()->user()->idRoles) }}"><span class="icon-file-text2"></span> Ver Reportes</a></li>

                                @endif
                                  </div>
                            </div>
                          </div>
                          @if (auth()->user()->idRoles==1)
                          <div class="card">
                              <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="icon-user-tie"></span> Administrador
                                  </button>
                                </h2>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
                                    <li class="nav-aside-subitem"><a class="nav-aside-link" href="{{ route('administrador.index') }}"><span class="icon-users"></span> usarios</a></li>
                                    <li class="nav-aside-subitem"><a class="nav-aside-link" href="{{ route('register') }}"><span class="icon-user-plus"></span> Agregar Usuarios</a></li>
                                </div>
                              </div>
                            </div>
                          @endif
                          
                    </div>  
            </div>

            </div>
        <!-- modificar esta parte -->
            <div class="main-body">
                @yield('content')
            </div>
        </div>   
</div>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    

</body>
</html>
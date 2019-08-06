<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Oswald:700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('./css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/style3.css') }}">
    <title>Document</title>
</head>
<body>

     <div class="container ">
            <header class="con-header ">
                    <div class="logo-gif">
                            <img src="http://americanadelcusco.edu.pe/wp-content/uploads/2017/11/logo.gif" alt="">
                        </div>
                <nav class="nav">
                    <ul class="nav-ul"><a href=""> INICIO </a></ul>
                    <ul class="nav-ul"><a href=""> EL INSTITUTO</a></ul>
                    <ul class="nav-ul"><a href=""> PROFECIONALIZACION</a></ul>
                    <ul class="nav-ul"><a href=""> BIENESTAR ESTUDIANTIL</a></ul>
                    <ul class="nav-ul"><a href=""> ADIMICION</a></ul>
                    <ul class="nav-ul"><a href=""> NOTICIAS</a></ul>
                    <ul class="nav-ul"><a href=""> EVENTOS</a></ul>
                    <ul class="nav-ul"><a href="">CONTACTOS</a></ul>
    
                </nav>
                <div class="linea-azul">
                </div>
            </header>
            
        <div class="row">
            <div class="col-3 aside">
                <div>
                    <ul class="aside-item">
                        <li class="item"> <a href=""> TUTORIA Y CONSEJERIA</a></li>
                        <li class="item"><a href="">BECAS</a></li>
                        <li class="item"><a href="">PSICOLOGIA</a></li>
                        <li class="item"><a href="">ASISTENCIA MEDICA</a></li>
                        <li class="item"><a href="">PAGOS</a></li>
                    </ul> 
                </div>  
                    {{-- nuevo login --}}
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                    <div class="form-group">
                        <label for="dni" class="form-label text-md-right">{{ __('Dni') }}</label>

                        
                            <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autofocus>

                            @error('dni')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label text-md-right">{{ __('Password') }}</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    

                    <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                    </div>
                </form>
        </div>
            <div class="col-9 main">
                
                <h1 class="main-title">SERVICIO ESTUDIANTIL</h1>
                <div class="">
                    <img class="main-img" src="/images/img1.jpg" alt="">
                    <p>Bienestar Estudiantil es el servcio que tiene como micion procurar l amyor
                        cantidad de biestar posible en plano academico; para el lodro de un proyecto estudio que
                        apunte a la excelencia
                    </p>
                </div>
                <div class="row pt-4">
                    <div class="col-5 ">
                        <h4 class="main-title">ASISTENCIA PSICOLOGICA</h4>
                        <img class="main-img" src="/images/img2.jpg" alt="">
                    </div>
                    <div class="col-7">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint molestiae numquam necessitatibus, culpa cupiditate odit laudantium! Tempore, 
                            voluptatibus. Deleniti illum fugiat debitis eligendi nisi repellendus. Officia fugit ipsum tempore laudantium.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>
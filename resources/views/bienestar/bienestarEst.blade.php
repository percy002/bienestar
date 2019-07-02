<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/icon-style.css">
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
        <div class="layau">
            <div class="main-header">
                <h1>servicio de bienestar estudiantil</h1>
                <h2>Administrador</h2>

            </div>
            <div class="main-aside">
                <ul class="nav-aside">
                    <h1>inicio</h1>
                    <li class="nav-aside-item"><a href="#">Catalogo</a>
                        <ul class="nav-aside nav-subaside">
                            <li class="nav-aside-subitem"><a class="nav-aside-link" href="">registro de estudiantes</a></li>
                            <li><a class="nav-aside-link" href="">operaciones</a></li>
                        </ul>
                    </li>
                    <li class="nav-aside-item"><a href="#">Reportes</a>
                        <ul class="nav-aside nav-subaside">
                            <li class="nav-aside-subitem"><a class="nav-aside-link" href="">Alumno X prorroga de pago</a></li>
                            <li class="nav-aside-subitem"><a class="nav-aside-link" href="">Alumno X solisitud de pago</a></li>
                            <li class="nav-aside-subitem"><a class="nav-aside-link" href="">Alumno X Psicopedagojico</a></li>
                            <li class="nav-aside-subitem"><a class="nav-aside-link" href="">Alumno X Asistencia medica</a></li>
                            <li class="nav-aside-subitem"><a class="nav-aside-link" href="">Alumno X Tutoria y consejeria</a></li>
                          
                        </ul>
                    </li>
                    <li class="nav-aside-item"><a href="#">Administrador</a>
                        <ul class="nav-aside nav-subaside">
                            <li class="nav-aside-subitem"><a class="nav-aside-link" href="">usario</a></li>
                            <li class="nav-aside-subitem"><a class="nav-aside-link" href="">Configurtacion</a></li>
                        </ul>
                    </li>
                </ul>
    
            </div>
        <!-- modificar esta parte -->
            <div class="main-body">
                <div class="body-item">
                    <div class="body-item-1">
                        <h1>Listado de estudiantes </h1>
                        <form class="form-inline ">
                            <button class="btn btn-outline-success mr-1" type="submit"><span class="icon-search"></span></button>
                            <input class="form-control mr-3 " type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                    <div class="body-item-2 d-flex justify-content-end mt-2">
                            <button type="button " class="btn btn-primary mr-3">Agregar alumno</button>

                    </div>


                    <div class="body-item-3 mt-5">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Carrera</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alumnos as $alumno)
                                    <tr>
                                            <th scope="row">{{alumno->idAlumno}}</th>
                                            <td>huaman de la vega</td>
                                            <td>alex oscar fredy</td>
                                            <td>turinsmo</td>
                                            <td class="d-flex justify-content-end">
                                                <button type="button " class="btn btn-warning "><span class="icon-pencil"></span></button>
                                                <button type="button" class="btn btn-danger mx-2"><span class="icon-bin"></span></button>
                                                <button type="button " class="btn  btn-success ">Operacion</button>
                                            </td>
                                            </tr>
                                    @endforeach
                                       
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>   
</div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>
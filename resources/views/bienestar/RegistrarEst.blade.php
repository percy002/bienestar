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
        <!-- modificar esta parte  -->
            <div class="main-body">
                <h1 class="d-flex justify-content-center">Registro de estudiante</h1>
                <form class="mt-5">
                    <div class="form-group row ">
                        <label  class="col-sm-4 pl-5 col-form-label">DNI</label>
                        <div class="col-sm-4  ">
                            <input type="text" class="form-control" id="dni" placeholder="DNI">
                        </div>
                    </div>   
                    <div class="form-group row">
                        <label  class="col-sm-4 pl-5 col-form-label">Nombre</label>
                        <div class="col-sm-7  ">
                            <input type="text" class="form-control" id="Nombre" placeholder="Nombre">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label  class="col-sm-4 pl-5 col-form-label">Apellido Paterno</label>
                        <div class="col-sm-7  ">
                            <input type="twxt" class="form-control" id="ApPaterno" placeholder="Apellidos paterno">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label  class="col-sm-4 pl-5 col-form-label">Apellido Materno</label>
                        <div class="col-sm-7  ">
                            <input type="twxt" class="form-control" id="APmaterno" placeholder="Apellidos materno">
                        </div>
                    </div>     
                    <fieldset class="form-group ">
                        <div class="row">
                            <legend class="col-form-label col-sm-4 pt-0 pl-5">genero</legend>
                            <div class="col-sm-7 ">
                                <div class="form-check ml-3">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="masculino" value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">M</label>
                                </div>
                                <div class="form-check ml-3">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="femenino" value="option2">
                                    <label class="form-check-label" for="gridRadios2">F</label>
                                </div>
                            </div>
                        </div>
                    </fieldset> 
                    <div class="form-group row">
                        <label  class="col-sm-4 pl-5 col-form-label">Telefono</label>
                        <div class="col-sm-7  ">
                            <input type="text" class="form-control" id="telefomno" placeholder="telefono">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label  class="col-sm-4 pl-5 col-form-label">direccion</label>
                        <div class="col-sm-7  ">
                            <input type="text" class="form-control" id="direccion" placeholder="direccion">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label  class="col-sm-4 pl-5 col-form-label">Email</label>
                        <div class="col-sm-7  ">
                            <input type="email" class="form-control" id="Email" placeholder="Email">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label  class="col-sm-4 pl-5 col-form-label">Fecha de Nacimiento</label>
                        <div class="col-sm-7  ">
                            <input type="date" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label  class="col-sm-4 pl-5 col-form-label">Carrera Profeciona</label>
                        <div class="col-sm-7  ">
                                <div class="form-group col-md-12 p-0">
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end  pt-4">
                            <button type="submit" class="btn btn-primary mx-5">Guardar</button>
                            <button type="submit" class="btn btn-primary mr-5">Salir</button>
                    </div>
                </form>
            </div>
        </div>   
</div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>
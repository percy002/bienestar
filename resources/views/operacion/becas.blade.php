@extends('operacion.index')
@section('operacion')
    
<div class="d-flex justify-content-star ml-3">
    <h3 class="mt-4">Beca-Integral   Medias-Becas y Descuentos</h3>
</div> 

<div class="accordion " id="accordion1">
<div class="card">
  <div class="card-header-2" id="heading1">
    <h2 class="mb-0">
        <button class="btn btn-link-2 collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
            Beca-integral
      </button>
    </h2>
  </div>

  <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion1">
    <div class="card-body">
        <form form action="{{$action}}" method="POST">
            {{ csrf_field() }} 
            <input style="display:none" type="text" id="idAlumno" name="idAlumno" value="{{$alumno->idAlumno}}">
                <input style="display:none" type="text" id="fechaInicio" name="fechaInicio" value="{{date("Y-m-d")}}">
                <input style="display:none" type="text" id="fechaFin" name="fechaFin" value="{{date("Y-m-d")}}">
            <div class="row">
                <div class="col-ms-10 ml-3">
                        <textarea name="comentarios" rows="5" cols="80" placeholder="Observaciones"></textarea>
                </div>
                <div class="col-sm-2 d-flex  align-items-center ">
                    <div class="form-check ml-3">
                        <input class="form-check-input" type="radio" name="idOperacionBienestar" id="idOperacionBienestar" value="1" >
                        <label class="form-check-label" for="gridRadios1">SI</label>
                    </div>
                    <div class="form-check ml-3">
                        <input class="form-check-input" type="radio" name="idOperacionBienestar" id="idOperacionBienestar" value="" checked>
                        <label class="form-check-label" for="gridRadios2">NO</label>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end  pt-4">
                <button type="submit" class="btn btn-primary mx-5">Guardar</button>
                <button type="button" class="btn btn-primary mr-5" onclick="location.href='{{route('bienestar.index')}}'">Salir</button>
            </div>
        </form>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-header-2" id="heading2">
    <h2 class="mb-0">
      <button class="btn btn-link-2 collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        Medias-Becas
      </button>
    </h2>
  </div>
  <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion1">
    <div class="card-body">
            <form form action="{{$action}}" method="POST">
                {{ csrf_field() }} 
                <input style="display:none" type="text" id="idAlumno" name="idAlumno" value="{{$alumno->idAlumno}}">
                <input style="display:none" type="text" id="fechaInicio" name="fechaInicio" value="{{date("Y-m-d")}}">
                <input style="display:none" type="text" id="fechaFin" name="fechaFin" value="{{date("Y-m-d")}}">
                <div class="row">
                    <div class="col-ms-10 ml-3">
                            <textarea name="comentarios" rows="5" cols="80" placeholder="Observaciones"></textarea>
                    </div>
                    <div class="col-sm-2 d-flex  align-items-center ">
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="idOperacionBienestar" id="idOperacionBienestar" value="2" >
                            <label class="form-check-label" for="gridRadios1">SI</label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="idOperacionBienestar" id="idOperacionBienestar" value="" checked>
                            <label class="form-check-label" for="gridRadios2">NO</label>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end  pt-4">
                    <button type="submit" class="btn btn-primary mx-5">Guardar</button>
                    <button type="button" class="btn btn-primary mr-5" onclick="location.href='{{route('bienestar.index')}}'">Salir</button>
                </div>
            </form>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-header-2" id="heading3">
    <h2 class="mb-0">
      <button class="btn btn-link-2 collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        Descuentos
      </button>
    </h2>
  </div>
  <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion1">
    <div class="card-body">
            <form form action="{{$action}}" method="POST">
                {{ csrf_field() }} 
                <input style="display:none" type="text" id="idAlumno" name="idAlumno" value="{{$alumno->idAlumno}}">
                <input style="display:none" type="text" id="fechaInicio" name="fechaInicio" value="{{date("Y-m-d")}}">
                <input style="display:none" type="text" id="fechaFin" name="fechaFin" value="{{date("Y-m-d")}}">

                <div class="row">
                    <div class="col-ms-10 ml-3">
                            <textarea name="comentarios" rows="5" cols="80" placeholder="Observaciones"></textarea>
                    </div>
                    <div class="col-sm-2 d-flex  align-items-center ">
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="idOperacionBienestar" id="idOperacionBienestar" value="3" >
                            <label class="form-check-label" for="gridRadios1">SI</label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="idOperacionBienestar" id="idOperacionBienestar" value="3" checked>
                            <label class="form-check-label" for="gridRadios2">NO</label>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end  pt-4">
                    <button type="submit" class="btn btn-primary mx-5" >Guardar</button>
                    <button type="button" class="btn btn-primary mr-5" onclick="location.href='{{route('bienestar.index')}}'">Salir</button>
                </div>
            </form>
    </div>
  </div>
</div>
</div>

@endsection
@extends('operacion.index')
@section('operacion')
<div class="d-flex justify-content-star ml-3">
    <h3 class="mt-4">Beca-Integral   Medias-Becas y Descuentos</h3>
</div>     
<form form action="{{$action}}" method="POST"> 
    {{ csrf_field() }}
    <div class="beca-integral ml-3 mt-3">
        <input style="display:none" type="text" id="idAlumno" name="idAlumno" value="{{$alumno->idAlumno}}">
        <input style="display:none" type="text" id="fechaInicio" name="fechaInicio" value="{{date("Y-m-d")}}">
        <input style="display:none" type="text" id="fechaFin" name="fechaFin" value="{{date("Y-m-d")}}">
        <p>Beca-integral Observaciones</p>
        {{-- <div class="row">
            <div class="col-ms-10 ml-3">
                    <textarea id="observaciones1" name="observaciones" rows="5" cols="80" placeholder="Observaciones"></textarea>
            </div>
            <div class="col-sm-2 d-flex  align-items-center ">
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="gridRadios" id="1" value="option1" >
                    <label class="form-check-label" for="gridRadios1">SI</label>
                </div>
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="gridRadios" id="femenino" value="option2" checked>
                    <label class="form-check-label" for="gridRadios2">NO</label>
                </div>
            </div>
        </div> --}}

        <p>Medias-Becas Observaciones</p>
        {{-- <div class="row">
            <div class="col-ms-10 ml-3">
                    <textarea id="observaciones2" name="observaciones" rows="5" cols="80" placeholder="Observaciones"></textarea>
            </div>
            <div class="col-sm-2 d-flex  align-items-center ">
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="gridRadios" id="2" value="option1" >
                    <label class="form-check-label" for="gridRadios1">SI</label>
                </div>
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="gridRadios" id="femenino" value="option2" checked>
                    <label class="form-check-label" for="gridRadios2">NO</label>
                </div>
            </div>
        </div> --}}

        <p>Descuentos Observaciones</p>
        <div class="row">
            <div class="col-ms-10 ml-3">
                    <textarea id="observaciones" name="observaciones" rows="5" cols="80" placeholder="Observaciones"></textarea>
            </div>
            <div class="col-sm-2 d-flex  align-items-center ">
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="idOperacionBienestar" id="idOperacionBienestar" value="3" >
                    <label class="form-check-label" for="idOperacionBienestar">SI</label>
                </div>
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="idOperacionBienestar" id="femenino" value="option2" checked>
                    <label class="form-check-label" for="idOperacionBienestar">NO</label>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end  pt-4">
                <button type="submit" class="btn btn-primary mx-5">Guardar</button>
                @if (auth()->user()->rol==1)
                    
                @else
                    <button type="" class="btn btn-primary mr-5" onclick="location.href='{{route('/')}}'">Salir</button>

                @endif
        </div>
    </div>
</form>
@endsection
@extends('operacion.index')
@section('operacion')
<div class="d-flex justify-content-star ml-3">
    <h3 class="mt-4">Beca-Integral   Medias-Becas y Descuentos</h3>
</div>     
<form action=""> 
    <div class="beca-integral ml-3 mt-3">
        <p>Beca-integral Observaciones</p>
        <div class="row">
            <div class="col-ms-10 ml-3">
                    <textarea name="comentarios" rows="5" cols="80" placeholder="Observaciones"></textarea>
            </div>
            <div class="col-sm-2 d-flex  align-items-center ">
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="gridRadios" id="masculino" value="option1" >
                    <label class="form-check-label" for="gridRadios1">SI</label>
                </div>
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="gridRadios" id="femenino" value="option2" checked>
                    <label class="form-check-label" for="gridRadios2">NO</label>
                </div>
            </div>
        </div>

        <p>Medias-Becas Observaciones</p>
        <div class="row">
            <div class="col-ms-10 ml-3">
                    <textarea name="comentarios" rows="5" cols="80" placeholder="Observaciones"></textarea>
            </div>
            <div class="col-sm-2 d-flex  align-items-center ">
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="gridRadios" id="masculino" value="option1" >
                    <label class="form-check-label" for="gridRadios1">SI</label>
                </div>
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="gridRadios" id="femenino" value="option2" checked>
                    <label class="form-check-label" for="gridRadios2">NO</label>
                </div>
            </div>
        </div>

        <p>Descuentos Observaciones</p>
        <div class="row">
            <div class="col-ms-10 ml-3">
                    <textarea name="comentarios" rows="5" cols="80" placeholder="Observaciones"></textarea>
            </div>
            <div class="col-sm-2 d-flex  align-items-center ">
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="gridRadios" id="masculino" value="option1" >
                    <label class="form-check-label" for="gridRadios1">SI</label>
                </div>
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="gridRadios" id="femenino" value="option2" checked>
                    <label class="form-check-label" for="gridRadios2">NO</label>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end  pt-4">
                <button type="submit" class="btn btn-primary mx-5">Guardar</button>
                <button type="submit" class="btn btn-primary mr-5">Salir</button>
        </div>
    </div>
</form>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Transporte</title>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Con esta dirección llamo a mis estilos -->
<link href="{{asset('css/styles.css')}}" rel="stylesheet">
<!-- -------------------------------------- -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-form2">

    <div class="row m-0 w-100">
        <div class="col-lg-12">
            <a href="{{ url('/') }}">Inicio</a>
            <div class="text-center pt-5" id="registro">
        <h2><strong>Registro del solicitante de <br> transporte voluntario de desechos</strong></h2>
            </div>
        </div>
        <div class="imgprin">
            <img src="{{asset('images/Hoja_log1.png')}}" alt="Hoja">
        </div>
    </div>
<br>
    <div class="row m-0 w-100">
        <div class="col-lg-12">
        
                 {{-- Muestra el mensaje error si no se registra correctamente --}}
@if (session('error'))
<div class="col-sm-12">
    <div class="alert  alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    </div>
</div>
@endif
{{-- Fin del mensaje --}}

    <form name="formulario" method="post" action="{{url('solicitud/add')}}" class="needs-validation" novalidate>
                @csrf
                <div class="container-infoPer">
                <div class="row">
                <div class="col">

                    <div class="infoP">
                  <div class="form-group col-sm-6">
                    <label for="validationCustom01">Nombre</label>
                    <input type="text" class="form-control" name="Nombre" id="validationCustom01" placeholder="Escriba su nombre" required>
                    <div class="valid-feedback">
                        Looks good!
                      </div>
                      <div class="invalid-feedback">
                     Debe llenar este campo!
                      </div>
                </div>
                  <div class="form-group col-sm-6">
                    <label for="validationCustom02">Apellido</label>
                    <input type="text" class="form-control" name="Apellido1" id="validationCustom02" placeholder="Escriba su nombre" required>
                    <div class="valid-feedback">
                        Looks good!
                      </div>
                      <div class="invalid-feedback">
                     Debe llenar este campo!
                      </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="validationCustom03">Apellido2</label>
                    <input type="text" class="form-control" name="Apellido2" id="validationCustom03" placeholder="Escriba su Apellido2" required>
                    <div class="invalid-feedback">
                      Por favor escriba su apellido.
                    </div>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="validationCustom04">Cédula</label>
                    <input type="text" class="form-control" name="Cedula" id="validationCustom04" placeholder="Número de cédula" required>
                    <div class="valid-feedback">
                        Looks good!
                      </div>
                      <div class="invalid-feedback">
                     Debe llenar este campo!
                      </div>
                </div>
                </div>

            </div>

            <div class="col">
                <div class="imglogo">
                    <img src="{{asset('images/logo1.jpg')}} " alt="logo2">
                </div>
            </div>
        </div>
    </div>



<div class="container-checkBox">
    <div class="text-center pt-5">
        <h5><strong>Seleccione el tipo de desecho que tiene</strong></h5>
    </div><br>

    <div class="caja1">
        {{-- <div class="form-row">
            <div class="col-md-2 mb-3">
              <label for="validationCustom04">Plástico</label>
              <select class="custom-select" id="validationCustom04" name="Tipo">
                  <option selected disabled value="">Seleccione...</option>
                  <option value="Botellas Plasticas" >Botellas plásticas</option>
                  <option value="Bolsas Plásticas" > Bolsas plásticas </option>
                  <option value="Envase Florex" > Envase Florex </option>
                  <option value="Ninguno" > Ninguno</option>
                </select>
              <div class="invalid-feedback">
                Por favor escoja una desecho.
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <label for="validationCustom05">Cartón/Papel</label>
              <select class="custom-select" id="validationCustom05" name="Tipo" >
                <option selected disabled value="">Seleccione...</option>
                <option value="Papel/Carton" > Papel y cartón </option>
                  <option value="Tetra Pack" > Tetra Pack </option>
                  <option value="Ninguno" > Ninguno</option>
              </select>
              <div class="invalid-feedback">
                Por favor escoja una desecho.
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <label for="validationCustom06">Aluminio</label>
              <select class="custom-select" id="validationCustom06" name="Tipo">
                  <option selected disabled value="">Seleccione...</option>
                  <option value="Latas Aluminio" > Latas de aluminio</option>
                  <option value="Hojalata" > Hojalata</option>
                  <option value="Ninguno" > Ninguno</option>
                </select>
              <div class="invalid-feedback">
                Por favor escoja una desecho.
              </div>
            </div>
            <div class="col-md-2 mb-3">
                <label for="validationCustom06">Vidrio</label>
                <select class="custom-select" id="validationCustom06" name="Tipo">
                    <option selected disabled value="">Seleccione...</option>
                    <option value="Vidrio" > Vidrio</option>
                    <option value="Botellas Vidrio" > Botellas de vidrio</option>
                    <option value="Ninguno" > Ninguno</option>
                  </select>
                <div class="invalid-feedback">
                    Por favor escoja una desecho.
                </div>
              </div>
          </div> --}}
    <div class="row row-cols-2">
        <div class="col-sm-6">
  <div class="custom-control custom-checkbox">
        <input type="checkbox" name="Tipo" class="custom-control-input" id="customCheck1" value="TetraPack">
          <label class="custom-control-label" for="customCheck1">Tetra Pack</label>
  </div>
                <br>
      <div class="custom-control  custom-checkbox">
        <input type="checkbox" name="Tipo" class="custom-control-input" id="customCheck2" value="BotellasPlasticas">
          <label class="custom-control-label" for="customCheck2">Botellas plásticas</label>
      </div>
                <br>
       <div class="custom-control  custom-checkbox">
          <input type="checkbox" name="Tipo" class="custom-control-input" id="customCheck3" value="Alumunio">
         <label class="custom-control-label" for="customCheck3">Aluminio</label>
         </div>
                  <br>
     <div class="custom-control  custom-checkbox">
        <input type="checkbox" name="Tipo" class="custom-control-input" id="customCheck4" value="BolsasPlásticas">
            <label class="custom-control-label" for="customCheck4">Bolsas plásticas</label>
     </div>
</div>

        <div class="col-sm-6">
            <div class="custom-control  custom-checkbox">
                <input type="checkbox" name="Tipo" class="custom-control-input" id="customCheck5" value="Hojalata">
              <label class="custom-control-label" for="customCheck5">Hojalata</label>
           </div>
           <br>
            <div class="custom-control  custom-checkbox">
              <input type="checkbox" name="Tipo" class="custom-control-input" id="customCheck6" value="Papel/Carton">
              <label class="custom-control-label" for="customCheck6">Papel y cartón</label>
         </div>
         <br>
         <div class="custom-control  custom-checkbox">
            <input type="checkbox" name="Tipo" class="custom-control-input" id="customCheck7" value="EnvaseFlorex">
            <label class="custom-control-label" for="customCheck7">Envase florex</label>
        </div>
        <br>
        <div class="custom-control  custom-checkbox">
         <input type="checkbox" name="Tipo" class="custom-control-input" id="customCheck8" value="Vidrio">
          <label class="custom-control-label" for="customCheck8">Vidrio</label>
        </div>
      </div>
    </div>
</div>
</div>



<div class="container-ButtonRadios">
    <div class="text-center pt-5">
        <h5><strong>Seleccione un aproximado en cantidad de desechos</strong></h5>
    </div><br>
<div class="row">
    <div class="col-lg-12">
<div class="btnRad">
    <div class="col-md-3 mb-3">
        <label for="validationCustom06">Cantidad de desechos</label>
        <select class="custom-select" id="validationCustom06" name="Cantidad" required>
            <option selected disabled value="">Seleccione...</option>
            <option value="POCA" > POCA</option>
            <option value="MEDIA" > MEDIA </option>
            <option value="MUCHA" > MUCHA </option>
          </select>
        <div class="invalid-feedback">
            Por favor escoja una cantidad.
        </div>
      </div>
        {{-- <div class="custom-control custom-switch custom-control-inline">
        <input type="checkbox" name="Cantidad desecho"  class="custom-control-input" id="customSwitch1" value="Poca">
        <label class="custom-control-label" for="customSwitch1">Poca</label>
        </div>
        <div class="custom-control custom-switch custom-control-inline">
        <input type="checkbox" name="Cantidad desecho" class="custom-control-input" id="customSwitch2" value="Media">
        <label class="custom-control-label" for="customSwitch2">Media</label>
        </div>
        <div class="custom-control custom-switch custom-control-inline">
        <input type="checkbox" name="Cantidad desecho" class="custom-control-input" id="customSwitch3" value="Mucha">
        <label class="custom-control-label" for="customSwitch3">Mucha</label>
        </div> --}}
</div>
</div>
</div>
</div>

<div class="container-map">
<div class="row">
    <div class="col-lg-12">
        <div class="text-center pt-5">
            <h5 id="tipos_residuos"><strong>Escriba su dirección</strong></h5>
            <br>
            <div class="mapa">
                <div class="form-group">
                    <label for="validationCustom10">¿Cuál es tu dirección exacta de dónde vives?</label>
                    <textarea class="form-control" name="Ubicacion" id="validationCustom10" name="msg" maxlength="140" rows="3" cols="40" placeholder="Escribe aquí su dirección por favor" required></textarea>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                   Debe llenar este campo!
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
</div>
<br>
     <button type="submit" class="btn btn-outline-info">{{ __('REGISTRARSE') }}</button>
</form>
        </div>
    </div>
</div>

<script src="{{asset('js/validateForm.js')}}"></script>
</body>
</html>

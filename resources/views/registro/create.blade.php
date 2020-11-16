<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Voluntario</title>

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

<div class="container-form">
    <div class="row">

        <div class="imgprin">
            <img src="{{asset('images/Hoja_log1.png')}}" alt="Hoja">
        </div>

        <div class="col">
            <div class="text-center pt-5" id="textP">
                <h2><strong>Formulario de registro para ser voluntario</strong></h2>
            </div>


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

            
<form name="formulario" method="post" action="{{url('registro/add')}}" class="needs-validation" novalidate>
    @csrf
            <div class="text-center pt-5">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Sexo" id="inlineRadio1" required value="Hombre" checked>
                    <label class="form-check-label" for="inlineRadio1">&nbsp;Hombre</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Sexo" id="inlineRadio2" required value="Mujer">
                    <label class="form-check-label" for="inlineRadio2">&nbsp;Mujer</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Sexo" id="inlineRadio3" required value="Niño/a">
                    <label class="form-check-label" for="inlineRadio3">&nbsp;Niño(@)</label>
                  </div>
            </div>

<br><br>

                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Nombre</label>
                    <input type="text" class="form-control" id="validationCustom01"
                     placeholder="Escriba su nombre" required name="Nombre">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                   Debe llenar este campo!
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Apellido1</label>
                    <input type="text" class="form-control" name="Apellido1" id="validationCustom02" placeholder="Escriba su apellido1" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Debe llenar este campo!
                       </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03">Apellido2</label>
                    <input type="text" class="form-control" name="Apellido2" id="validationCustom03" placeholder="Escriba su Apellido2" required>
                    <div class="invalid-feedback">
                      Por favor escriba su apellido.
                    </div>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom04">Provincia</label>
                    <select class="browser-default custom-select" id="provincias" onchange="provinciaSeleccionada()" required name="Provincia" >
                      </select>
                    <div class="invalid-feedback">
                      Por favor escoja una provincia existente.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom05">Cantón</label>
                    <select class=" browser-default custom-select" id="cantones" onchange="cantonSeleccionado()" required name="Canton">
                    </select>
                    <div class="invalid-feedback">
                        Por favor escoja una cantón existente.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom06">Distrito</label>
                    <select class="browser-default custom-select" id="distritos" name="Distrito" required>
                      </select>
                    <div class="invalid-feedback">
                        Por favor escoja una distrito existente.
                    </div>
                  </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="validationCustom07">Celular</label>
                        <input type="tel" id="validationCustom07" name="Celular" class="form-control" placeholder="Número de celular" required>
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                        <div class="invalid-feedback">
                       Debe llenar este campo!
                        </div>
                      </div>
                    <div class="form-group col-md-4">
                        <label for="validationCustom08">Correo</label>
                        <input type="email" name="Email" class="form-control" id="validationCustom08" placeholder="Escriba su correo" required>
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                        <div class="invalid-feedback">
                       Debe llenar este campo!
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="validationCustom09">Cédula</label>
                      <input type="text" name="Cedula" class="form-control" id="validationCustom09" placeholder="Número de cédula" required>
                      <div class="valid-feedback">
                          Looks good!
                        </div>
                        <div class="invalid-feedback">
                       Debe llenar este campo!
                        </div>
                  </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="validationCustom10">¿Por qué quieres ser voluntario de transporte de desechos?</label>
                    <textarea class="form-control" name="Comentario" id="validationCustom10" maxlength="140" rows="3" cols="40" placeholder="Escribe aquí tus comentarios" required></textarea>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                   Debe llenar este campo!
                    </div>
                </div>
                  <br>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="invalidCheck" required>
                      <label class="form-check-label" for="invalidCheck">
                        <p>Para registrarse, acepta los términos de servicio y privacidad</p>
                      </label>
                      <div class="invalid-feedback">
              Debes de aceptar los términos de servicio y privacidad.
                      </div>
                    </div>
                  </div>
                  <br>
               <!-- <a href="{{ url('/') }}" class="btn btn-danger">REGRESAR</a> -->
               <!-- <button class="btn btn-outline-info" type="submit">REGISTRARSE</button> -->
                <button type="submit" class="btn btn-outline-info">
                    {{ __('REGISTRARSE') }}
                </button>

            </form>
        </div>

        <div class="col">
          <a href="{{ url('/') }}">Inicio</a>
            <div class="img1">
                <img src=" {{asset('images/LOG_app_2.jpg')}}" alt="Logo2">
            </div>
          <div class="img2">
            <img src=" {{asset('images/care1.jpg')}}" alt="Cuidemos">
          </div>


        </div>
    </div>
</div>

<script src="{{asset('js/validateForm.js')}}"></script>
<script src="{{asset('js/data.js')}}"></script>
<script src="{{asset('js/index.js')}}"></script>

</body>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</html>

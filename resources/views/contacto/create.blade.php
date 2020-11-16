<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="content-Type" content="text/html, charset-utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contactanos</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Con esta dirección llamo a mis estilos -->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <!-- -------------------------------------- -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>
</head>

<body>

    <div class="container-map">
        <div class="row m-0 w-100">
        <div class="col-sm-3">
                <div class="text-center pt-5">
                    <a href="{{ url('/') }}"><font face="Verdana, Geneva, sans-serif"
                        color="#42d2b6" size="4">Inicio</font></a>
                    </div>
        </div>
        <div class="row m-0 w-100">
          <div class="col-lg-6">
          <div class="mapa">
            <h6 class="text-center pt-5"><strong>Encuentra aquí el lugar a donde se dirigen tus desechos</strong></h6>
            <iframe src="{{asset('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11108.447739582343!2d-85.45514974739447!3d10.145711024940006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9fb6d26f825361%3A0xcbdc1416a01be4f3!2sProvincia%20de%20Guanacaste%2C%20Nicoya!5e0!3m2!1ses-419!2scr!4v1604105103146!5m2!1ses-419!2scr')}}" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
         </div>
      </div>

          <div class="col-lg-6">
            <br><br>
      <h2><strong>Envíanos tu información</strong></h2>
        <br>
        
        
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
        
<form name="formulario" method="post" action="{{url('contacto/add')}}" class="needs-validation" novalidate>
          @csrf
          <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom01">Nombre</label>
                  <input type="text" class="form-control" name="Nombre" id="validationCustom01" placeholder="Tu Nombre" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                  <div class="invalid-feedback">
                    Por favor escriba su nombre.
                  </div>
                </div>
              </div>
                  <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom02">Apellido1</label>
                  <input type="text" class="form-control" name='Apellido1' id="validationCustom02" placeholder="Tu Apellido1" required>
                  <div class="invalid-feedback">
                    Por favor escriba su apellido.
                  </div>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom02">Apellido2</label>
                  <input type="text" class="form-control" name='Apellido2' id="validationCustom02" placeholder="Tu Apellido2" required>
                  <div class="invalid-feedback">
                    Por favor escriba su apellido.
                  </div>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-3 mb-3">
                  <label for="validationCustom04">Provincia</label>
                  <select class="browser-default custom-select" id="provincias" onchange="provinciaSeleccionada()" required name="Provincia">
                  </select>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                  <div class="invalid-feedback">
                    Por favor escoja una provincia.
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="validationCustom04">Cantón</label>
                  <select class=" browser-default custom-select" id="cantones" onchange="cantonSeleccionado()" required name="Canton">
                  </select>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                  <div class="invalid-feedback">
                    Por favor escoja un cantón.
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom06">Distrito</label>
                    <select class="browser-default custom-select" id="distritos" name="Distrito" required>
                      </select>
                    <div class="invalid-feedback">
                        Por favor escoja una distrito existente.
                    </div>
                  </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationCustom05">Correo</label>
                  <input type="email" class="form-control" name='Email' id="validationCustom05" placeholder="tucorreo@example.com" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                  <div class="invalid-feedback">
                    Por favor escriba un correo valido.
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="validationCustom06">Código Postal</label>
                  <input type="tel" class="form-control" name='Codigo' id="validationCustom06" placeholder="Código P.">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                  <div class="invalid-feedback">
                    Por favor escriba un código valido.
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-outline-info">{{ __('Enviar Información') }}</button>
              <br><br><br>
    </form>
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

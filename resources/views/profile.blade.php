<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
  crossorigin="anonymous">


  <!-- Con esta dirección llamo a mis estilos -->
  <link rel="stylesheet" href="{{mix('css/profile.css')}}">
  <!-- -------------------------------------- -->

  <title>Editar Perfil</title>

</head>
<body>

  <div class="container-profile">

    <div class="inicio">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">{{ __('Inicio') }}</a>
      </li>
    </div>
    <br>
    <h2>Perfil:&nbsp;{{Auth::user()->name}}</h2>
    <br>

    <div class="row m-0 w-100">
      <div class="col-md-6">

        <div class="container-msje">
       {{-- Muestra el mensaje si se registra correctamente --}}
       @if (session('success'))
       <div class="row m-0 w-100">
        <div class="col-sm-8">
           <div class="alert  alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
       </div>
     </div>
     @endif
     {{-- Fin del mensaje --}}
     </div>

     <form method="post" action="{{action('UserController@update', $id)}}" enctype="multipart/form-data">
      @csrf
      <div class="mb-4">
        <img class="img-profile rounded-circle" src="{{ asset(Auth::user()->photo_route) }}" alt="Imagen de perfil" width="280" height="260">

      </div>

      <div class="row m-0 w-100">
       <div class="col-sm-4 col-12">
        <div class="invoiceBox">
          <label for="file">
            <div class="boxFile" data-text="Seleccionar archivo">
              <span>SELECCIONAR ARCHIVO</span>
            </div>
          </label>
          <input id="file" multiple="" name="avatar" size="6000" type="file"
          class="form-control @error('email') is-invalid @enderror">
          @error('avatar')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        </div>

      </div>
    </div>

       <div class="form-group">
        <div class="col-md-5 mb-3">
         <label for="name">Nombre</label>
         <input type="text" name="name"
         class="form-control @error('name') is-invalid @enderror" id="name"
         value="{{$user->name}}" required>

         @error('name')
         <div class="alert alert-danger">{{$message}}</div>
         @enderror
       </div>
     </div>


     <div class="form-group">
      <div class="col-md-5 mb-3">
        <label for="email">Correo</label>
        <input type="text" name="email"  class="form-control @error('email') is-invalid @enderror"
        id="email" value="{{$user->email}}" required>

        @error('email')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-5 mb-3">
       <label for="password">Contraseña</label>
       <input type="password" name="password"
       class="form-control @error('password') is-invalid @enderror text-center" id="password" required autocomplete="new-password">

       @error('password')
       <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
       @enderror
     </div>
   </div>

   <div class="form-group">
    <div class="col-md-5 mb-3">
      <label for="password-confirm">Confirmar Contraseña</label>
      <input type="password" name="password_confirmation"
      class="form-control @error('password_confirmation') is-invalid @enderror text-center"
      id="password-confirm" placeholder="Confirmar Contraseña" required autocomplete="new-password">

      @error('password_confirmation')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
  </div>


  <button type="submit" class="btn btn-outline-primary">Actualizar</button>

</form>

</div>
<div class="col-sm-6">
  <div class="images">
   <div class="img1">
     <img src="{{asset('images/care1.jpg')}}" alt="CuidarAmbiente">
   </div>
   <div class="img2">
     <img src="{{asset('images/logo1.jpg')}}" alt="CuidarAmbiente">
   </div>
 </div>


</div>
</div>

</div>

{{-- Esta Función muestra el nombre del archivo en el input:file  --}}
<script src="js/textImage.js"></script>
{{-- ------------------------------------------------ --}}

</body>
</html>


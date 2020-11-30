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

  <title>{{ Auth::user()->name }}</title>

</head>





<div class="container-profile">

        <div class="inicio">
                <a href="{{ url('/') }}">Inicio</a>
        </div>
        <br>
        <h2>User Profile for:&nbsp;{{ Auth::user()->name }}</h2>
        <br>

       <div class="row m-0 w-100">
        <div class="col-md-6">

 <form method="post" {{-- action="{{route('user.profile.update', $user)}}"--}} enctype="multipart/form-data">
                               @csrf
                               @method('PUT'){{--  <----No se si esto es mejor cambiarlo por patch --}}
<div class="mb-4">
<img class="img-profile rounded-circle" src="images/vidrio.jpg">
{{-- Aqui un ejemplo con una imagen, pero debería de llamar la imagen que el usuario elija --}}
 </div>

 <div class="row m-0 w-100">
	<div class="col-sm-4 col-12">
    <div class="invoiceBox">
      <label for="file">
        <div class="boxFile" data-text="Seleccionar archivo">
          <span>SELECCIONAR ARCHIVO</span>
        </div>
      </label>
      <input id="file" multiple="" name="invoice[]" size="6000" type="file"
      accept="application/pdf,image/x-png,image/gif,image/jpeg,image/jpg,image/tiff">
    </div>
  </div>
</div>



 <div class="form-group">
        <div class="col-md-5 mb-3">
         <label for="username">Nombre de Usuario</label>
<input type="text" name="username"
class="form-control @error('username') is-invalid @enderror" id="username"
value="{{ Auth::user()->username }}">

            @error('username')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
   </div>



 <div class="form-group">
        <div class="col-md-5 mb-3">
 <label for="name">Nombre</label>
   <input type="text" name="name"
   class="form-control @error('name') is-invalid @enderror" id="name"
   value="{{ Auth::user()->name }}">

                     @error('name')
                     <div class="alert alert-danger">{{$message}}</div>
                     @enderror
   </div>
 </div>


 <div class="form-group">
        <div class="col-md-5 mb-3">
    <label for="email">Correo</label>
            <input type="text" name="email"  class="form-control @error('email') is-invalid @enderror"
            id="email" value="{{Auth::user()->email}}">

               @error('email')
               <div class="alert alert-danger">{{$message}}</div>
               @enderror
   </div>
 </div>

      <div class="form-group">
        <div class="col-md-5 mb-3">
       <label for="password">Contraseña</label>
        <input type="password" name="password"
        class="form-control @error('password') is-invalid @enderror" id="password"
        value="{{Auth::user()->password}}">

                 @error('password')
                <div class="alert alert-danger">{{$message}}</div>
                 @enderror
     </div>
      </div>


  <div class="form-group">
        <div class="col-md-5 mb-3">
      <label for="password-confirmation">Confirmar Contraseña</label>
           <input type="password" name="password_confirmation"
           class="form-control @error('password_confirmation') is-invalid @enderror text-center"
        id="password-confirmation" placeholder="Confirmar Contraseña">

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
 <img src="images/care1.jpg" alt="CuidarAmbiente">
        </div>
        <div class="img2">
 <img src="images/logo1.jpg" alt="CuidarAmbiente">
        </div>
        </div>


       </div>
       </div>

</div>

{{-- Esta Función muestra el nombre del archivo en el input:file  --}}
<script src="js/textImage.js"></script>
{{-- ------------------------------------------------ --}}
    <body>
    </body>
    </html>


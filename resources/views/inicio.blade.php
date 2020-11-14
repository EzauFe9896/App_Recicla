<!DOCTYPE html>
<html>
<head>

<meta http-equiv="content-Type" content="text/html, charset-utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Con esta dirección llamo a mis estilos -->
  <link href="{{asset('css/styles.css')}}" rel="stylesheet">
<!-- -------------------------------------- -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <title>VT & WT C.R</title>


  <script src="js/popover.js"></script>
</head>


<body>
 <!-- Barra encima del topnav-->

 <div class="container-up">
    <div class="row m-0 w-100">
    <div class="col-md-10">
    <p>Ayudanos a&nbsp; salvar la naturaleza&nbsp;&nbsp;<strong>
<button type="button" class="btn btn-info btn-sm"><strong>VT & WT C.R</strong></button>
&nbsp;&nbsp;&nbsp;!&nbsp;NO TE QUEDES CON LOS BRAZOS CRUZADOS&nbsp;!</strong></p>
    </div>

      <div class="col-md-2">
      <div class="row justify-content-end">
    <div class="col-2">
    <a href="#facebook"><font face="Verdana, Geneva, sans-serif"
      color="white"  size="4"><i class="fa fa-facebook-square" aria-hidden="true"></i></font></a>
    </div>
     <div class="col-2">
    <a href="#intagram"><font face="Verdana, Geneva, sans-serif" color="white" size="4">
    <i class="fa fa-instagram" aria-hidden="true"></i></font></a>
    </div>
     <div class="col-4">
    <a href="#youtube"><font face="Verdana, Geneva, sans-serif" color="white" size="4"><i class="fa fa-youtube-play" aria-hidden="true"></i></font></a>
    </div>
      </div>
    </div>
    </div>
    </div>

    <!-- Fin barra del encima del topnav -->

    <!-- Barra de menu principal -->
 <div class="container-principal">

    <div class="row m-0 w-100">
      <div class="col-2 col-md-2">
      <button class="icon-bar"><i class="fa fa-bars"></i></button>
      <i target="_blank" href="">
      <img src="images/LogoApp.jpg" alt="VT&WT" ></i>
    </div>

      <div class="col-10">
        <div class="row">
          <div class="col-md-7">
             <!--  search bar -->
              <div class="box">
                <div class="container-4">
                  <input type="search" id="search" placeholder="Find in V.T.&.W.T..." />
                  <button class="icon"><i class="fa fa-search"></i></button>
                </div>
              </div>
            <!-- Fin del search bar -->
          </div>

          <div class="col-md-5 d-flex">

            <nav class="navbar navbar-expand-lg">
              <ul class="d-flex">
            <li><a href="{{ url('/') }}"><strong>Inicio</strong></a></li>

            <li><a method="get"  href="{{action('ContactanosController@create')}}"><strong>Contactanos</strong></a></li>

            <li><a href="#nosotros" data-toggle="modal" data-target="#staticBackdrop"><strong>Acerca de</strong></a></li>

            <li><a href="{{ url('/recurso') }}"><strong>Recursos</strong></a></li>

            <li><a href="{{ url('/login') }}"><strong>Inicia Sesión</strong></a></li>
              </ul>
            </nav>

          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Fin barra Menu principal -->

<!-- Sub barra # 2 -->
<div class="container-menu">
    <div class="row m-0 w-100"> <!-- para que coloque el 100% -->

  <!--  el d-flex = a display:flex
  d-block= display:block
  px-2 = pading-left: 7px, padding-right: 7px se utiliza para hacer espaciado entre los a -->

      <div class="col d-flex">
        <a class="d-block px-2" method="get" role="button" href="{{action('RegistroVoluntarioController@create')}}">Registrarse como voluntario</a>
      </div>

      <div class="col d-flex">
      <a class="d-block px-2" href="#tipos_residuos">Tipos de residuos</a>
      </div>

      <div class="col d-flex">
        <a class="d-block px-2"  href="{{ url('/calculadora') }}">Gana en E-colones</a>
        <a class="d-block px-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</a>
      </div>



      <div class="col">
      <a class="d-block px-2" method="get" role="button" href="{{action('SolicitaTransporteController@create')}}"><strong>Solicitar tranporte de desechos</strong></a>
      </div>

    </div>
   </div>
  <!--Fin sub barra # 2 -->

  <!-- Sub barra #4 -->
<div class="container-info2">
    <div class="row m-0 w-100">
      <div class="col-md-12">
      <p><font face="Verdana, Geneva, sans-serif"
       color="black"  size="2">Te estamos cuidando! Conoce<a href="#aquí">&nbsp;aqui</a><em><strong>&nbsp;las medidas contra el Covid19.</strong></em></font></p>
    </div>
   </div>
  </div>
  <!-- Fin sub barra #4 -->


<!-- Carrusel de imagenes -->
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/p1.jpg" alt="Banner 1" width="1100" height="500">
         <div class="carousel-caption">
            <h3><font face="Verdana, Geneva, sans-serif"

          color="white"  size="5">¡Su viaje hacia la recolección<br>responsable de residuos</h3>
          </font>
          <a method="get" role="button" href="{{action('RegistroVoluntarioController@create')}}">
  <button type="button" class="btn btn-info btn-md">COMIENZA AQUÍ!</button>
  </a>
  <br>
  <br>
          </div>
      </div>
      <div class="carousel-item">
        <img src="images/pi2.jpg" alt="Banner 2" width="1100" height="500">
         <div class="carousel-caption">
            <h5>Así luce nuestro hogar</h5>
            <p>¡Ayudemos hacer la diferencia!</p>

          </div>
      </div>
      <div class="carousel-item">
        <img src="images/p3.jpg" alt="Banner 3" width="1100" height="500">
         <div class="carousel-caption">
            <h5>¡Descubra cómo VT&WT puede respaldar .</h5>
            <p>las necesidades de su comunidad!</p>
          </div>
      </div>
      <div class="carousel-item">
        <img src="images/pi4.jpg" alt="Banner 3" width="1100" height="500">
         <div class="carousel-caption">
            <h5>¿Quieres sabes más?</h5>
            <p>¡Recolección de residuos rápida y conveniente!</p>

            <a method="get" role="button" href="{{action('ContactanosController@create')}}">
                <button type="button" class="btn btn-info btn-md">¡HABLEMOS!</button>
                </a>
          </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="fa fa-chevron-circle-left" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="fa fa-chevron-circle-right" aria-hidden="true"></span>
    </a>
  </div>
  <!-- Fin del carrusel -->



<!-- --------------Inicio de la galleria de imagenes de Categorías---------- -->
<section id="gallery" class="container">
    <div class="text-center pt-5">
    <h2 id="tipos_residuos"><strong>Tipos De Residuos</strong></h2>
    </div>
    <br>

    <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
    <img src="images/carton_papel.jpg"  alt="Papel/carton" width="600" height="400" />
     <div class="centrado"><strong>PAPEL&nbsp;/&nbsp;CARTON&nbsp;&nbsp;</strong></div>
     <!-- Button to Open the Modal 1-->
     <a href="#aquí" data-toggle="modal" data-target="#staticBackdrop1">Ver más</a>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
    <img src="images/hojalata.jpg" alt="hojalta" width="600" height="400" />
    <div class="centrado"><strong>HOJALATA&nbsp;&nbsp;</strong></div>
      <!-- Button Open trigger modal 2 -->
    <a  href="#aquí" data-toggle="modal" data-target="#staticBackdrop2">Ver más</a>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
    <img src="images/botellasplasticas.jpg" alt="BotellasPlásticas" width="600" height="400" />
    <div class="centrado"><strong>BOTELLAS PLASTICAS</strong></div>
           <!-- Button to Open the Modal 3-->
    <a href="#aquí" data-toggle="modal" data-target="#staticBackdrop3">Ver más</a>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">

    <img src="images/aluminio1.jpg" alt="Aluminio" width="600" height="400" />
     <div class="centrado"><strong>ALUMINIO&nbsp;&nbsp;</strong></div>
       <!-- Button to Open the Modal 4-->
     <a href="#aquí" data-toggle="modal" data-target="#staticBackdrop4">Ver más</a>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
     <img src="images/bolsas_plasticas.jpg" alt="BolsasPláticas" width="600" height="400" />
      <div class="centrado"><strong>BOLSAS PLASTICAS</strong></div>
        <!-- Button to Open the Modal 5-->
      <a href="#aquí" data-toggle="modal" data-target="#staticBackdrop5">Ver más</a>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <img src="images/botellasvidrio1.jpg" alt="BotellaVidrio" width="600" height="400" />
        <div class="centrado"><strong>BOTELLAS DE /&nbsp;VIDRIO</strong></div>
          <!-- Button to Open the Modal 6-->
        <a href="#aquí" data-toggle="modal" data-target="#staticBackdrop6">Ver más</a>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
      <img src="images/florex.jpg" alt="BotellaVidrio"  />
      <div class="centrado"><strong>ENVASE FLOREX</strong></div>
        <!-- Button to Open the Modal 7-->
      <a href="#aquí" data-toggle="modal" data-target="#staticBackdrop7">Ver más</a>
  </div>

  <div class="col-lg-4 col-md-6 col-sm-12">
    <img src="images/tetrapack.jpg" alt="BotellaVidrio"  />
    <div class="centrado"><strong>TETRA-PACK</strong></div>
      <!-- Button to Open the Modal 8-->
    <a href="#aquí" data-toggle="modal" data-target="#staticBackdrop8">Ver más</a>
</div>

<div class="col-lg-4 col-md-6 col-sm-12">
  <img src="images/LogoApp.jpg" alt="BotellaVidrio"  />
  <div class="centrado"><strong>Logo de VT&WT</strong></div>
</div>

    </div>
    </section>
    <br>
    <br>
    <!-- ----------------Fin de la galeria de imagenes------------- -->


<div class="container-modal">

  <!-- The Modal1 -->
  <div class="modal fade" id="staticBackdrop1" data-backdrop="static"
data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header1 -->
        <div class="modal-header">
          <h4 class="modal-title">PAPEL&nbsp;/&nbsp;CARTON<i class="fa fa-recycle" aria-hidden="true"></i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body1 -->
        <div class="modal-body">
         <p>El reciclado del <strong>papel</strong>, juega un papel importante en la conservación de los bosques.
        Una forma de ahorrar madera es obtener papel del papel usado.
        Para la recogida selectiva de papel y cartón se emplean, por lo general, contenedores de color azul.<br><br>
        <hr>
        El  <strong>cartón</strong> es un material formado por varias capas de papel superpuestas, a base de fibra virgen o de papel reciclado.
        El cartón es más grueso, duro y resistente que el papel.
        Algunos tipos de cartón son usados para fabricar embalajes y envases, básicamente cajas de diversos tipos.
        La capa superior puede recibir un acabado diferente llamado «estuco» que le confiere mayor vistosidad.</p>
        </div>

        <!-- Modal footer1 -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
  </div>

<!-- The Modal 2 -->
<div class="modal fade" id="staticBackdrop2" data-backdrop="static"
data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">

        <!-- Modal Header 2 -->
        <div class="modal-header">
          <h4 class="modal-title">HOJALATA<i class="fa fa-recycle" aria-hidden="true"></i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body 2 -->
        <div class="modal-body">
  <p>La hojalata aparece por primera vez en la Alemania del siglo XIV y consiste en chapas de hierro superficialmente estañadas.
    Esta capa al tener propiedades anticorrosivas protege al metal de la oxidación.
     Según los usos, el revestimiento anticorrosivo también puede ser de zinc
    (automóviles, electrodomésticos) o de aluminio (piscinas, depósitos catalíticos).
    La fabricación masiva de la hojalata se realiza por medio de la laminación mecánica de la chapa de hierro <br><br>
    <h5>¿Cómo es el proceso de reciclaje?</h5>
    La hojalata junto a otros metales se separa del resto de los reciclables mediante un potente electroimán.
    Luego se prensa y se transportan a un centro específico para su reciclado. Allí, se tritura la lata para despegar las etiquetas de papel,
    y se selecciona el material triturado. El acero y el estaño son separados. El acero se vuelve a utilizar para producir más latas y el estaño se usa para producir cobre.
    Se estima que la chatarra reciclada cubre el 40% de las necesidades mundiales de acero (cifra de 2006).
    <br><br>
    Por cada tonelada de chatarra de hojalata recuperada en la industria siderúrgica
    se ahorra 70% de la energía y un 40% del agua utilizada para fabricar hojalata nueva.</p>
        </div>

        <!-- Modal footer 2 -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
  </div>


<!-- The Modal 3 -->
<div class="modal fade" id="staticBackdrop3" data-backdrop="static"
data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">

        <!-- Modal Header 3 -->
        <div class="modal-header">
          <h4 class="modal-title">BOTELLAS PLASTICAS<i class="fa fa-recycle" aria-hidden="true"></i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body 3 -->
        <div class="modal-body">
         <p>La botella de plástico es un envase muy utilizado en la comercialización de líquidos
           en productos como lácteos, bebidas o limpia hogares.
           Sus ventajas respecto al vidrio son básicamente su menor precio y su gran versatilidad de formas.
           Se comenzaron a desarrollar en la década de 1950.1​
            <br><br>
          El plástico se moldea para que la botella adquiera la forma necesaria para la función a que se destina.
          Algunas incorporan asas laterales para facilitar el vertido del líquido.
          Otras mejoran su ergonomía estrechándose en su parte frontal o con rebajes laterales para poder agarrarlas con comodidad.
          Las botellas con anillos perimetrales o transversales mejoran su resistencia mecánica al apilamiento.
          Las estrechas y anchas mejoran su visibilidad en el lineal al contar con un facing de mayor superficie.
          <br><br>
          El tapón de rosca, también de plástico, es el cierre más habitual de las botellas de plástico.
          Su diseño puede incrementar sus funcionalidades actuando como difusor en spray, dispensador de líquido,
          medida de dosificación o asidero, en este caso, por ejemplo, para garrafas pesadas. <br><br>
          <hr>
          <h5>Reciclaje</h5>
          Segregación de botellas plásticas
          Las botellas de plástico son la mayoría reciclables.
          Muchos países cuentan con un sistema de recogida selectiva de basura que
          permite reciclar botellas y otros envases de plástico.

          En el reciclaje de botellas se siguen diferentes pasos:
          <br><br>
          <ul>
          <li>Separación de los diferentes materiales mediante
          procedimientos ópticos o de reconocimiento de forma.</li>
          <li>Granulado del plástico mediante procesos industriales</li>
          <li>Limpieza para eliminar componentes contaminantes como papel, comida, polvo.</li>
        </ul>
          Sin embargo, existe la polémica de que debido a la alta producción de nuevo plástico y
           el alto coste que genera realizar el reciclaje apropiado
           (que el plástico sea convertido en un objeto parecido y que a su vez sea reciclable de nuevo),
           solo un pequeño porcentaje del plástico recuperado es realmente reciclado.

        </p>
        </div>

        <!-- Modal footer 3 -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
  </div>

<!-- The Modal 4 -->
<div class="modal fade" id="staticBackdrop4" data-backdrop="static"
data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">

        <!-- Modal Header 4 -->
        <div class="modal-header">
          <h4 class="modal-title">ALUMINIO<i class="fa fa-recycle" aria-hidden="true"></i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body 4 -->
        <div class="modal-body">
         <p><h5>¿QUE ES EL ALUMINIO?</h5>
          El aluminio es el más ligero de los metales y está presente en miles de usos industriales, médicos y en la construcción.
          Además, por su ligereza, ser maleable y ser neutro, se usa para envases de bebidas y alimentos.
          Es flexible, ligero y resistente, permite confeccionar envases muy delgados y que son totalmente reciclables. <br><br>
          <hr>
          <h5>DEGRADACIÓN Y CONTAMINACIÓN</h5>
          El aluminio es un metal difícil de oxidar, es por eso que el producir latas con aluminio reciclado aminora la contaminación del aire
          (por ejemplo, los dióxidos sulfúricos, que producen la lluvia ácida). Obtener aluminio reciclado reduce un 95% la contaminación,
          y contribuye a la menor utilización de energía eléctrica, en comparación con el procesado de materiales vírgenes.
          Reciclando una lata de aluminio, se ahorra la energía necesaria para mantener un televisor encendido durante 3 horas. <br><br>
          <hr>
          <h5>RECICLAJE</h5><a href="#" title="Reciclaje" data-toggle="popover" data-placement="right" data-trigger="focus"
           data-content=" El aluminio, al igual que el vidrio puede ser reciclado infinidad de veces, ya que no pierde calidad en los distintos procesos
           y no cambia sus características químicas durante el reciclado.
          El proceso se puede repetir indefinidamente y los objetos de aluminio se pueden fabricar enteramente con material reciclado.
          El proceso de reciclado es fácil,ya que las latas de aluminio desechadas están compuestas sólo de aluminio
          por lo que no se requiere una separación previa de otros materiales.
          El residuo de aluminio es fácil de manejar, ya que es ligero, no se rompe, no arde y no se oxida, por lo mismo es también fácil de transportar.">Más información aquí</a>
         </p>
        </div>

        <!-- Modal footer 4 -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
  </div>

<!-- The Modal 5 -->
<div class="modal fade" id="staticBackdrop5" data-backdrop="static"
data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header 5 -->
        <div class="modal-header">
          <h4 class="modal-title">BOLSAS&nbsp;/&nbsp;PLASTICAS<i class="fa fa-recycle" aria-hidden="true"></i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body 5 -->
        <div class="modal-body">
         <p>Las bolsas de plástico están compuestas por un material termoplástico, es decir,
          un material que es capaz de ser repetidamente ablandado
          mediante la aplicación de calor y que luego se endurece al enfriarse.
          Por lo tanto puede ser reciclado. <br>
        <hr>
        <h5>REUTILIZAR Y REDUCIR LAS BOLSAS PLÁSTICAS</h5>
        <a href="#" title="3 R" data-toggle="popover" data-trigger="focus"
        data-placement="right" data-content="Algo importante a tener en cuenta es la básica regla de las “3 R”,
        Según ella, reciclar es sólo una parte de la solución.
        Además es fundamental es REDUCIR y el REUTILIZAR.">Más información aquí</a>
      </p>
        </div>

        <!-- Modal footer 5 -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
  </div>

  <!-- The Modal 6 -->
<div class="modal fade" id="staticBackdrop6" data-backdrop="static"
data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header 6 -->
        <div class="modal-header">
          <h4 class="modal-title">BOTELLAS DE / VIDRIO<i class="fa fa-recycle" aria-hidden="true"></i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body 6 -->
        <div class="modal-body">
         <p>El reciclaje de vidrio es el proceso mediante el
           cual se convierten desechos de vidrio en materiales
           que servirán para la creación de nuevos productos.
           <br>
          Este reciclaje permite reducir la cantidad de residuos
          que luego se llevan al vertedero,lo que supone un ahorro tanto de materias primas
          como de energía respecto a la fabricación de vidrio a partir de materias primas nuevas.
        <hr>
        <strong>Ventajas del <a href="#" title="3 R" data-toggle="popover" data-trigger="focus"
          data-placement="top" data-content="El reciclaje del vidrio supone un menor uso de recursos y
          materias primas que la fabricación de vidrio a partir de arena, cal y sosa.1​2​3​
          Cada kilogramo de material reciclado puede ser nuevamente reutilizado y reciclado.
          El vidrio es un material ideal para ser reciclado, ya que puede reciclarse infinidad
          de veces sin perder sus propiedades.">reciclaje de vidrio</a></strong>
          <hr>
          <a href="#" title="Botellas de vidrio" data-toggle="popover" data-trigger="hover"
          data-content="La mayor parte del vidrio reciclado se
          puede utilizar para hacer nuevos envases semejantes a los desechados.
           Además, una pequeña proporción se utiliza para la fabricación de otros materiales de construcción,
          como ladrillos, cerámicas, asfaltos, etc.">¿Qué hacen con las botellas de vidrio?</a>
        </p>
        </div>

        <!-- Modal footer 6 -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
  </div>

   <!-- The Modal 7 -->
<div class="modal fade" id="staticBackdrop7" data-backdrop="static"
data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header 7 -->
        <div class="modal-header">
          <h4 class="modal-title">ENVASES FLOREX<i class="fa fa-recycle" aria-hidden="true"></i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body 7 -->
        <div class="modal-body">
         <p> Se distribuyen en presentaciones concentradas para disminuir
           el consumo de agua durante su proceso productivo, el uso de plástico en su envasado
           y la generación de emisiones durante su transporte.
           Los productos Florexdestacan por ser biodegradables y
           libres de componentes tóxicos o contaminantes durante su uso.
        <hr>
        </div>

        <!-- Modal footer 7 -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
  </div>

   <!-- The Modal 8 -->
<div class="modal fade" id="staticBackdrop8" data-backdrop="static"
data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header 8 -->
        <div class="modal-header">
          <h4 class="modal-title">TETRA-PACK<i class="fa fa-recycle" aria-hidden="true"></i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body 8 -->
        <div class="modal-body">
         <p>Los envases Tetrabrik que son fabricados
           por la casa Tetra Pack, son envases multicapa (5 capas),
            compuestos de tres materiales diferentes, estos materiales son:
            <br>
           <ul>
             <li> 21g de cartón (procedentes de celulosa virgen)</li>
             <li> 5.8g de plástico polietileno.</li>
             <li> 1.4g de aluminio.</li>
            </ul>
           <br>
          Este reciclaje permite reducir la cantidad de residuos
          que luego se llevan al vertedero,lo que supone un ahorro tanto de materias primas
          como de energía respecto a la fabricación de vidrio a partir de materias primas nuevas.
        <hr>
        <strong>¿Qué es el reciclaje de<a href="#" title="Reciclaje" data-toggle="popover" data-trigger="focus"
          data-placement="top" data-content="Completo de envases de cartón: sin separar el papel,
           el plástico y el aluminio, se utiliza todo el envase para producir
           material para nuevos productos."> Tetra Pak?</a></strong>
          <hr>
          <a href="#" title="Tiempo en degradarse" data-toggle="popover" data-trigger="hover"
          data-content="A la intemperie, un envase de tetrapak demora 35 años en degradarse.
          En cambio, reciclarlo apenas tarda cinco minutos en una planta de reciclaje.">¿Cuánto tarda en degradarse Tetra Pak?</a>
        </p>
        </div>

        <!-- Modal footer 8 -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
  </div>
  <hr>

  <!-- Modal Info About Nosotros-->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Acerca de esta App<i class="fa fa-recycle" aria-hidden="true"></i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
<p>Este aplicación nace de una problemática que ha impactado no solo en el país
         sino también en todo el mundo desde muchos años atrás, una problemática que afecta y no solo a
         las personas sino también a los demás seres vivos como los animales y las plantas, y ni qué
         decir de los animales acuáticos, además de impactar negativamente en uno de los
         ecosistemas más importantes del país y del mundo, los ríos.
         <hr>
        Dicha problemática es la contaminación, sin embargo este proyecto no  abarca la contaminación
        en general, sino que se centra en aquella que es producida
        por el mal tratamiento que las personas les da a los desechos o la basura,
        además de lo anterior, dicha causa va de la mano con otra,
        la cual es la inconsistencia del servicio de recolección de basura,
        así como también el hecho de que no existe un servicio
        como tal que recoja solo desechos específicos,
        como plástico, cartón, entre otros.</p>
        <br><hr>
        <div class="imgprin">
            <p>Por tal problemática es que nace esta grandiosa aplicación.</p>
            <img src="{{asset('images/LOG_app_2.jpg')}}" width="450" height="250" alt="Hoja">
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div><!-- Fin del contenedor modal -->


<div class="container-eco">
  <div class="row">
    <div class="col-lg-12">
      <div class="text-center pt-5">
        <h2><strong>¡A través de ecoins impactamos el planeta entero!</strong></h2>
        <img src="images/obj.png" alt="Objetivos">
    </div>
    <hr>
    <div class="embed-responsive embed-responsive-16by9">
    <iframe width="200" height="315" src="https://www.youtube.com/embed/UEkh47qyk6k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
</div>
</div>
<br><br>
<hr>

  <!-------------- Footer ------>
<footer>

    <div class="container-footer-all">

         <div class="container-body">

             <div class="colum1">
<font face="Verdana, Geneva, sans-serif"
color="white" size="2"><strong>¿NECESITAS AYUDA?</strong></font>


<div class="row">
<label><img src="images/LogoApp.jpg" style="width:25%;height:40%" alt="app"/><br><br>
<a target="_blank" href="">
<button type="button" class="btn btn-info btn-lg">SOLICITAR TRANSPORTE DE DESECHOS</button></a></label>
<div class="col-md-12"><font face="Verdana, Geneva, sans-serif"
    color="white" size="2"><strong>CONÉCTATE CON NOSOTROS</strong></font>
    <div class="col-3">
        <a href="#facebook"><font color="white"  size="4"><i class="fa fa-facebook-square" aria-hidden="true"></i></font></a>
        <a href="#intagram"><font color="white" size="4">
        <i class="fa fa-instagram" aria-hidden="true"></i></font></a>
        <a href="#youtube"><font  color="white" size="4">
    <i class="fa fa-youtube-play" aria-hidden="true"></i></font></a>
    <a href="#twitter"><font color="white"  size="4"><i class="fa fa-twitter-square" aria-hidden="true"></i></font></a>
        </div>

</div>

</div>

</div>


       <div class="colum2">
        <font face="Verdana, Geneva, sans-serif"
        color="white" size="2"><strong>&nbsp;SERVICIOS</strong></font>

         <div class="row">
        <label><font face="Verdana, Geneva, sans-serif"
        color="white" size="2">Servicios de residuos<br>recurrentes<br>
        Colección&nbsp;<br>bajo demanda<br>
        Rastrea&nbsp;tus<br>desechos aquí<br>
        Programas de &nbsp;sostenibilidad<br>
        Estatuto&nbsp;del&nbsp;Consumidor<br>
        Términos&nbsp;y&nbsp;condiciones</font></label>
                 </div>
       </div>

             <div class="colum3">

             <font face="Verdana, Geneva, sans-serif"
color="white" size="2"><strong>&nbsp;EMPRESA</strong></font>

                 <div class="row">
<label><font face="Verdana, Geneva, sans-serif"color="white" size="2">
Nosotros<br>Protección&nbsp;de<br>datos&nbsp;personales<br>
Trabaje&nbsp;con&nbsp;nosotros<br>
Condiciones&nbsp;<br>y campañas&nbsp;eventos<br>
                 </div>
             </div>

              <div class="colum4">

                <font face="Verdana, Geneva, sans-serif"
                color="white" size="2"><strong>&nbsp;&nbsp;CONTACTANOS</strong></font>

            <div class="row">
                <label><font face="Verdana, Geneva, sans-serif"color="white" size="2">
                -Carlos Andres(506) 8310-1636<br>
                -Raquel Parra(506) 8712-1005<br>
                -Jocelyn Duarte(506) 8742-2915<br>
                -Ezau J. Zúñiga(506) 7158-7928<br>
                -Muni-Nicoya(506) 2685-&nbsp;5089<br>
                -UNA-Nicoya(506) 2277-3000<br>
                </font></label>
            </div>

             </div>
<br><br>
             <div class="colum5">

                <font face="Verdana, Geneva, sans-serif"
   color="white" size="2"><strong>&nbsp;DESCARGAR LA APP</strong></font>

                    <div class="row">
                      <div class="store">
   <label>
   <a href="#tiendaApple">Tienda Apple&nbsp;&nbsp;<i class="fa fa-apple" aria-hidden="true"></i></a><br>
   <a href="#PlayStore">Google&nbsp;Play&nbsp;&nbsp;&nbsp;<i class="fa fa-play" aria-hidden="true"></i></a><br>
  </div>
  </div>
                </div>



         </div>

     </div>

<div class="container-footer">
<div class="footer" >
   <div class="information">
 <font face="Verdana, Geneva,sans-serif" color="white" size="2">
 <p>TODOS LOS DERECHOS RESERVADOS, VOLUNTARY TRASH & WASTE TRANSPORTATION
         <br>
  DIRECCIÓN: DISTRITO 01, NICOYA, GUANCASTE<br>
    © VT & WT S.A 2020
  </p>
</font>
     </div>
</div>

</div>
</footer>
<!-- ---------------------Fin del FOOTER-------------------------- -->


<script>
  // Funcio que valida los campos requeridos en el pequeño formulario
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>
</body>
</html>

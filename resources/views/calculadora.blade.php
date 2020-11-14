<!DOCTYPE html>
<html>
    <head>
        <title>Ganancia/Eco-lones</title>

        <!-- Con esta dirección llamo a mis estilos -->
        <link href="css/calculadora.css" rel="stylesheet">
      <!-- -------------------------------------- -->

    </head>
    <body onload="init();">
        <div class="container-principal">
            <div class="row">
                <div class="text-centrado">
     <h2><strong>¡Averigua con nuestra calculadora, cuántos Ecoins podras obtener!</strong></h2>
    </div>
                <div class="col-md-6">
                    <a href="{{ url('/') }}">Inicio</a>
                    <img src="images/precios.jpg" alt="Precios">
                </div>
                <div class="col-md-6">
                    <table class="calculadora">
                        <tr>
                            <td colspan="4"><span id="resultado"></span></td>
                            </tr>
                        <tr>
                            <td><button id="siete">7</button></td>
                            <td><button id="ocho">8</button></td>
                            <td><button id="nueve">9</button></td>
                            <td><button id="division">/</button></td>
                        </tr>
                        <tr>
                            <td><button id="cuatro">4</button></td>
                            <td><button id="cinco">5</button></td>
                            <td><button id="seis">6</button></td>
                            <td><button id="multiplicacion">*</button></td>
                        </tr>
                        <tr>
                            <td><button id="uno">1</button></td>
                            <td><button id="dos">2</button></td>
                            <td><button id="tres">3</button></td>
                            <td><button id="resta">-</button></td>
                        </tr>
                        <tr>
                            <td><button id="igual">=</button></td>
                            <td><button id="reset">C</button></td>
                            <td><button id="cero">0</button></td>
                            <td><button id="suma">+</button></td>
                        </tr>
                    </table>
                </div>
              </div>
        </div><!-- Fin del contenedo principal -->

        <script src="js/funcionalidad.js"></script>
    </body>
</html>

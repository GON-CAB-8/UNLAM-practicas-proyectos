<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Programacion Web II</title>

    <link rel="stylesheet" href="style.css">

    <!--Inicializacion Script para Mostrar Ocultar un <div>-->
    <script>
        function mostrarOcultarDiv(id) {
            var div = document.getElementById(id);
            if (div.style.display === "none") {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        }
    </script>

</head>

<!--Includes-->
<?php
require_once("Ejercicio01/Ejercicio01.php");
require_once("Ejercicio02/Ejercicio02.php");
require_once("Ejercicio03/Ejercicio03.php");
require_once("Ejercicio04/Ejercicio04.php");
require_once("Ejercicio05/Ejercicio05.php");
require_once("Ejercicio06/Saludar.php");
?>


<body>
<nav>

</nav>
<h1>Martin Gonzalo Cabral</h1>

<h2>Ejercicio 01</h2>

<button onclick="mostrarOcultarDiv('semaforo')">Mostrar/Ocultar</button>
<div id="semaforo" style="display: none">
    <h3>Semáforo</h3>

    <h4>Se llama a la funcion <i>semaforo_a()</i> con los siguientes parametros y en este orden (Verde, Amarillo, Rojo,
        Boquita)</h4>
    <button onclick="mostrarOcultarDiv('semaforo1')">Mostrar/Ocultar</button>

    <div id="semaforo1" style="display: none">
        <p class="input">semaforo_a("Verde")</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . semaforo_a("Verde");
            ?>
        </p>

        <p class="input">semaforo_a("Amarillo")</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . semaforo_a("Amarillo");
            ?>
        </p>

        <p class="input">semaforo_a("Rojo")</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . semaforo_a("Rojo");
            ?>
        </p>

        <p class="input">semaforo_a("Boquita")</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . semaforo_a("Boquita");
            ?>
        </p></div>


    <h4>Se llama a la funcion <i>semaforo_b()</i> con los siguientes parametros y en este orden (Verde, Amarillo, Rojo,
        Perro)</h4>
    <button onclick="mostrarOcultarDiv('semaforo2')">Mostrar/Ocultar</button>

    <div id="semaforo2" style="display: none">
        <p class="input">semaforo_b("Verde")</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . semaforo_b("Verde");
            ?>
        </p>

        <p class="input">semaforo_b("Amarillo")</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . semaforo_b("Amarillo");
            ?>
        </p>

        <p class="input">semaforo_b("Rojo")</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . semaforo_b("Rojo");
            ?>
        </p>

        <p class="input">semaforo_b("Perro")</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . semaforo_b("Perro");
            ?>
        </p>
    </div>


    <h4>Se llama a la funcion <i>semaforo_c()</i> con los siguientes parametros y en este orden (Verde, Amarillo, Rojo,
        Auto)</h4>
    <button onclick="mostrarOcultarDiv('semaforo3')">Mostrar/Ocultar</button>


    <div id="semaforo3" style="display: none">
        <p class="input">semaforo_c("Verde")</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . semaforo_c("Verde");
            ?>
        </p>

        <p class="input">semaforo_c("Amarillo")</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . semaforo_c("Amarillo");
            ?>
        </p>

        <p class="input">semaforo_c("Rojo")</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . semaforo_c("Rojo");
            ?>
        </p>

        <p class="input">semaforo_c("Auto")</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . semaforo_c("Auto");
            ?>
        </p>
    </div>
</div>

<h2>Ejercicio 02</h2>

<button onclick="mostrarOcultarDiv('binomio')">Mostrar/Ocultar</button>
<div id="binomio" style="display: none">
    <h3>Binomio Cuadrado Perfecto</h3>

    <h4>Se llama a la funcion <i>binomioCuadradoPerfecto_a()</i> con los siguientes Parametros y en el siguiente orden
        (3, 4) y
        (4,
        5)</h4>

    <button onclick="mostrarOcultarDiv('binomio1')">Mostrar/Ocultar</button>
    <div id="binomio1" style="display: none">
        <p class="input">binomioCuadradoPerfecto_a(3, 4)</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . binomioCuadradoPerfecto_a(3, 4);
            ?>
        </p>

        <p class="input">binomioCuadradoPerfecto_a(4, 5)</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . binomioCuadradoPerfecto_a(4, 5);
            ?>
        </p>
    </div>


    <h4>Se llama a la funcion <i>binomioCuadradoPerfecto_b()</i> con los siguientes Parametros y en el siguiente orden
        (2, 3) y
        (3,
        5)</h4>

    <button onclick="mostrarOcultarDiv('binomio2')">Mostrar/Ocultar</button>
    <div id="binomio2" style="display: none">
        <p class="input">binomioCuadradoPerfecto_b(2, 3)</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . binomioCuadradoPerfecto_b(2, 3);
            ?>
        </p>

        <p class="input">binomioCuadradoPerfecto_b(3, 5)</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . binomioCuadradoPerfecto_b(3, 5);
            ?>
        </p>
    </div>
</div>

<h2>Ejercicio 03</h2>

<button onclick="mostrarOcultarDiv('concat')">Mostrar/Ocultar</button>
<div id="concat" style="display: none">
    <h3>Concatenar Textos</h3>

    <h4>Se llama a la funcion <i>concatenar()</i> y se le pasan los siguientes parametros ("Cama", "León")</h4>

    <button onclick="mostrarOcultarDiv('concat1')">Mostrar/Ocultar</button>
    <div id="concat1" style="display: none">
        <p class="input">concatenar("Cama", "León")</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . concatenar("Cama", "León");
            ?>
        </p>
    </div>

    <h4>Se llama a la funcion <i>concatenar()</i> y se le pasan los siguientes parametros ("Garra", "Pata")</h4>

    <button onclick="mostrarOcultarDiv('concat2')">Mostrar/Ocultar</button>
    <div id="concat2" style="display: none">
        <p class="input">concatenar("Garra", "Pata")</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . concatenar("Garra", "Pata");
            ?>
        </p>
    </div>
</div>

<h2>Ejercicio 04</h2>

<button onclick="mostrarOcultarDiv('increment')">Mostrar/Ocultar</button>
<div id="increment" style="display: none">
    <h3>Incrementar</h3>


    <h4>Se crea una variable con el numero 6 y se la manda por parametro varias veces a la funcion <i>incrementar()</i>
        y se va pidiendo llamando siempre a dicha variable</h4>

    <button onclick="mostrarOcultarDiv('increment1')">Mostrar/Ocultar</button>
    <div id="increment1" style="display: none">
        <p class="input">increment($numero)</p>
        <p class="resultado">
            <?php
            echo "<p>" . "Se inicializa la variable numero en 6" . "</p>";
            $numero = 6;
            echo "<p>" . "El numero es igual a: " . $numero . "</p>";

            echo "<p>" . "Se llama ala funcion incremetar y se le da el numero por parametro" . "</p>";
            incrementar($numero);
            echo "<p>" . "El numero es igual a: " . $numero . "</p>";


            echo "<p>" . "Se llama ala funcion incremetar 4 veces y se le da el numero por parametro" . "</p>";
            incrementar($numero);
            incrementar($numero);
            incrementar($numero);
            incrementar($numero);

            echo "<p>" . "numero es igual a: " . $numero . "</p>";

            ?>
        </p>
    </div>
</div>

<h2>Ejercicio 05</h2>

<button onclick="mostrarOcultarDiv('sum')">Mostrar/Ocultar</button>
<div id="sum" style="display: none">
    <h3>Sumatoria</h3>
    <h4>Se inicializa un array con los siguientes numeros: [2, 3, 8, 6, 8, 11, 4, 1.5]</h4>
    <?php
    $miArray = [2, 3, 8, 6, 8, 11, 4, 1.5];
    ?>

    <h4>Se llama a la funcion <i>sumatoria_a($miArray)</i> y se le pasa el array</h4>
    <button onclick="mostrarOcultarDiv('sum1')">Mostrar/Ocultar</button>
    <div id="sum1" style="display: none">
        <p class="input">sumatoria_a($miArray)</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . sumatoria_a($miArray);
            ?>
        </p>
    </div>

    <h4>Se llama a la funcion <i>sumatoria_b($miArray)</i> y se le pasa el array</h4>
    <button onclick="mostrarOcultarDiv('sum2')">Mostrar/Ocultar</button>
    <div id="sum2" style="display: none">
        <p class="input">sumatoria_a($miArray)</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . sumatoria_b($miArray);
            ?>
        </p>
    </div>

    <h4>Se llama a la funcion <i>sumatoria_c($miArray)</i> y se le pasa el array</h4>
    <button onclick="mostrarOcultarDiv('sum3')">Mostrar/Ocultar</button>
    <div id="sum3" style="display: none">
        <p class="input">sumatoria_a($miArray)</p>
        <p class="resultado">
            <?php
            echo "Resultado: " . sumatoria_c($miArray);
            ?>
        </p>
    </div>
</div>
</body>
</html>
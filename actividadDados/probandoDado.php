<?php
include("lib/Dado.php");
$unDado=new Dado();
//dado de 12 caras
$unDado->setLados(12);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probando la clase dado</title>
  </head>
  <body>
    <h2>En este fichero vamos a probar el uso de la clase Dado</h2>
    <p>El número obtenido en esta tirada es <b><?=$unDado->tirada()?></b></p>
    <h2>También un array de tiradas</h2>
    <ul>
      <?php
      $tiradas=$unDado->arrayTiradas(6);
      foreach ($tiradas as $tirada) {
        echo "<li>$tirada</li>";
      }
      ?>
    </ul>
  </body>
</html>

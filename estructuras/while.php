<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo while</title>
  </head>
  <body>
    <h1>Primeros numeros pares</h1>
    <div class="">
    <?php
    $contador=1;
    //$numPar=2;
    while ($contador <= 10) {
      echo 2*$contador."<br>";
      //$numPar=$numPar+2;
      $contador++;
    }
    ?>
    </div>
  </body>
</html>

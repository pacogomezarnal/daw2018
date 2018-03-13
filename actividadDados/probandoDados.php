<?php
include("lib/Dados.php");
$multiplesDados=new Dados();
$multiplesDados->anyadirDado(new DadoAmpliado(DadoAmpliado::KAMASUTRA));
$multiplesDados->anyadirDado(new DadoAmpliado(DadoAmpliado::NUMERICO));
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probando la clase dados</title>
  </head>
  <body>
    <h2>En este fichero vamos a probar el uso de la clase Dados</h2>
    <h2>En una tirada obtenemos</h2>
    <ul>
      <?php
      $tiradas=$multiplesDados->tirada();
      foreach ($tiradas as $tirada) {
        echo "<li>$tirada</li>";
      }
      ?>
    </ul>
  </body>
</html>

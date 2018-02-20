<?php
  include "./lib/Profesor.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Primera Clase</title>
  </head>
  <body>
    <?php
      $profe= new Profesor("Paco",42);
      $profe->setEdad(-5);
      $edadDelProfe=$profe->getEdad();
      $profe->imprimeEdad();
      //SEgundo profesor
      $profa= new Profesor("Manolo el del agujero solo",42);
      $profa->setEdad(25);
      $edadDelProfa=$profa->getEdad();
      echo "<br>$edadDelProfa";
    ?>
  </body>
</html>

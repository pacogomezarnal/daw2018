<?php
  include "Profesor.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Primera Clase</title>
  </head>
  <body>
    <?php
      $profe= new Profesor();
      $profe->imprimeNombre();
    ?>
  </body>
</html>

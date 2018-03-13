<?php
use Lib\Mundo\Persona as Persona;
include("lib/Persona.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  $paco=new Persona();
  $paco->setNombre("Paco");
  echo "Tu nombre es: ".$paco->getNombre();
  ?>
  </body>
</html>

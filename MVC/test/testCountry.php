<?php
require "../model/Country.php";
require "../model/City.php";

//Creamos conexion
$pais=new Country();
$ciudad=new City();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
    </title>
  </head>
  <body>
    <?php
      $resultado=$ciudad->findAll("city");
      foreach ($resultado as $pais) {
        echo "Nombre: ".$pais["Name"]."<br>";
      }
    ?>
  </body>
</html>

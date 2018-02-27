<?php
require "lib/heroes/Gabo.php";
require "lib/villanos/Josep.php";

$primerHeroe= new Gabo("Primer Gabo");
$primerVillano= new Josep();
$segundoHeroe= new Gabo("Segundo Gabo");
$tercerHeroe=$segundoHeroe;

$segundoHeroe->restarVida(10);
$tercerHeroe->restarVida(10);

$hordaDeGabos=[];
for ($i=0; $i < 10; $i++) {
  $hordaDeGabos[]=new Gabo("Gabo".$i);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Uso de herencia</title>
  </head>
  <body>
    <?php
    echo "Primer personaje tiene ". $primerHeroe->getVida()." puntos de vida<br>";
    echo "Segundo personaje tiene ". $segundoHeroe->getVida()." puntos de vida<br>";
    echo $hordaDeGabos[8]->getNombre()." tiene ". $hordaDeGabos[8]->getVida()." puntos de vida";
    ?>
  </body>
</html>

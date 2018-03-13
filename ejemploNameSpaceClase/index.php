<?php
use Lib\Universidad\Alumno as Alumno;
use Lib\Universidad\Profesor as P;
include("lib/Alumno.php");
include("lib/Profesor.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probando namespace</title>
  </head>
  <body>
    <?php
    //Nuevo Alumno
    $alumno1=new Alumno();
    $alumno1->setNombre("Salva");
    $alumno1->setApodo("El Mohicano");
    ?>
    <h1>Alumno de DAW</h1>
    <p>El nombre del alumno es:<b><?=$alumno1->getNombre()?></b></p>
    <p>El apodo del alumno es:<b><?=$alumno1->getApodo()?></b></p>
  </body>
</html>

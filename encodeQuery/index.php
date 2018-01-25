<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lectura paises</title>
    <link rel="stylesheet" href="./estilos.css">
  </head>
  <body>

    <?php
    $conector = new mysqli("localhost",
    "root", "root", "world");
    if ($conector->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
    }else{
      //Interaccion con la base de datos
      echo "<h1>Paises del mundo</h1>";
      $resultado = $conector->query("SELECT Name,continent FROM country GROUP
      BY continent");
      $resultadoArrayAll=$resultado->fetch_all();
      $resultadoArray=[];
      foreach ($resultado as $fila) {
        $resultadoArray[]=$fila;
      }
      $resultadoJson=json_encode($resultadoArray);
      $resultadoJsonAll=json_encode($resultadoArrayAll);
      var_dump($resultadoJson);
      var_dump($resultadoJsonAll);
    }
    ?>
  </body>
</html>

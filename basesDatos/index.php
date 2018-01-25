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
      foreach ($resultado as $fila) {
      ?>
        <div class="row">
          <div class="column left">
            Pais
          </div>
          <div class="column right">
            <?=$fila["Name"]?>
          </div>
        </div>
      <?php
        //echo "Pais: ".$fila["Name"];
      }
      /*
      while($fila=$resultado->fetch_assoc()){
        echo "<li>Pais: ".$fila["Name"]."</li>";
      }*/
      echo "</ul>";
    }
    ?>
  </body>
</html>

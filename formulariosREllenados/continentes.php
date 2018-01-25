<?php
  //Nos conectamos a la DB
  $conector = new mysqli("localhost",
  "root", "root", "world");
  if ($conector->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
  }else{
    $resultadoContinentes = $conector->query("SELECT DISTINCT continent
      FROM country ORDER BY continent ASC");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de continentes</title>
  </head>
  <body>
  <form class="" action="" method="post">
    <select class="" name="">
      <?php foreach ($resultadoContinentes as $fila):?>
        <option value="<?=$fila["continent"]?>"><?=$fila["continent"]?></option>
      <?php endforeach; ?>
    </select>
  </form>
  </body>
</html>

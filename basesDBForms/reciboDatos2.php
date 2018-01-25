<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba de URL GET</title>
  </head>
  <body>
    <?php
      $conector = new mysqli("localhost",
      "root", "root", "world");
      if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
      }else{
        if(empty($_POST["code"])) echo "VOILA";
        $code=$_POST["code"];
        $continente=$_POST["continent"];

        $consulta="SELECT * FROM country WHERE
        Code='$code' AND Continent='$continente'";
        echo "<br>";
        echo $consulta;
        $resultado = $conector->query($consulta);
          foreach ($resultado as $fila) {
            echo "<br>El pais buscado es:".$fila["Name"];
          }
      }
    ?>
  </body>
</html>

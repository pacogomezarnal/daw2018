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
?>

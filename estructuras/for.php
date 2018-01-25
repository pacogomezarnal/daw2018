<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo for</title>
  </head>
  <body>
    <h1>Primeros numeros pares</h1>
    <ul>
      <?php
        for ($i=1; $i<=10 ; $i++) {
          echo "<li>".($i*2)."</li>";
        }
       ?>
     </ul>
  </body>
</html>

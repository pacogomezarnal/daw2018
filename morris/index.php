<?php
$conector = new mysqli("localhost",
"root", "root", "world");
if ($conector->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
}else{
  $resultado = $conector->query("SELECT Name,Surface FROM country");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Morris</title>
     <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  </head>
  <body>
    <div id="myfirstchart" style="height: 300px;"></div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script
    new Morris.Line({
      // ID of the element in which to draw the chart.
      element: 'myfirstchart',
      // Chart data records -- each entry in this array corresponds to a point on
      // the chart.
      data: [
        <?php
        foreach ($resultado as $fila) {
          echo "{ nombre: '".$fila["Name"]."', value: ".$fila["Surface"] ."},";
        }
        ?>
      ],
      // The name of the data record attribute that contains x-values.
      xkey: 'year',
      // A list of names of data record attributes that contain y-values.
      ykeys: ['value'],
      // Labels for the ykeys -- will be displayed when you hover over the
      // chart.
      labels: ['Value']
      });
    </script>
  </body>
</html>

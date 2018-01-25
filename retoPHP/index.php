<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body>
<?php
  $url=parse_url($_SERVER['PHP_SELF']);
  $path=$url['path'];
  $filename=pathinfo($path);
  $name=$filename['filename'];
 ?>
<ul>
  <li><a class="<?php if($name=="index") echo "active";?>" href="index.php">
      Home</a></li>
  <li><a class="<?php if($name=="nosotros") echo "active";?>" href="nosotros.php">Nosotros</a></li>
  <li><a class="<?php if($name=="contactar") echo "active";?>"  href="contactar.php">Contactar</a></li>
</ul>

</body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form con campo hidden</title>
  </head>
  <body>
    <form action="recibirCampoHidden.php" method="post">
      Nombre: <input type="text" name="nombre" value="" id="nombre">
      <br>
      Apellidos: <input type="text" name="apellidos" value="" id="apellidos">
      <input type="hidden" name="accion" value="actualizar" id="accion">
      <input type="hidden" name="id" value="<?=$_GET["id"]?>" id="id">
      <br>
      <input type="submit" name="" value="ENVIAR">
    </form>
  </body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>HOME - MyContacts</title>
  <link rel="icon" type="image/png" href="./imagenes/logo.png" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="ajax.js"></script>
  <script src="https://kit.fontawesome.com/8876df5dfb.js"></script>
</head>
<body>
<?php
include "header2.php";
?>
  <div  class="tabla">
      <table id="resultado" class="tabla_admin">
            <?php
            include "eliminados.table.php";
            ?>
      </table>
<?php
      echo "<div class='btn'> <a href='administracion_usuarios.php' onclick='eliminados(); return false'><button class='boton1' type='button'>Volver</button></div></a>";
 ?>
  </div>
</body>
</html>
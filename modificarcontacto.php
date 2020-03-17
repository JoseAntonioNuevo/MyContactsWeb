<!DOCTYPE html>
<html>
<head>
	<title>modificar contacto</title>
</head>
<body>
	<?php
	include "connection.php";

	//falta cambiar numero por el contacto deseado
	
	$query= ("SELECT * FROM contactos WHERE id_contactos='3'");
    $result= mysqli_query($conexion, $query);
    $value=mysqli_fetch_array($result);
    $id_contactos=$value['id_contactos'];
    $nombre=$value['nombre'];
    $apellido=$value['apellido'];
    $email=$value['email'];
    $ubicacion1=$value['direccion1'];
    $ubicacion2=$value['direccion2'];
    $foto=$value['foto'];

    //falta cambiar numero por el contacto deseado
	$query= ("SELECT telefono FROM telefonos WHERE id_contacto='3'");
    $result= mysqli_query($conexion, $query);
    $value=mysqli_fetch_array($result);
    $telefono=$value['telefono'];

echo "<form action='modificarcontacto.proc.php' method='POST'>";
	echo "<h2>Nombre</h2>";
	echo "<input type='text' name='nombre' value='$nombre'><br>";
	echo "<h2>Apellido</h2>";
	echo "<input type='text' name='apellido' value='$apellido'><br>";
	echo "<h2>Email</h2>";
	echo "<input type='text' name='email' value='$email'><br>";
	echo "<h2>Teléfono</h2>";
	echo "<input type='text' name='telefono' value='$telefono'><br>";
	echo "<h2>Ubicación 1</h2>";
	echo "<input type='text' name='ubicacion1' value='$ubicacion1'><br>";
	echo "<h2>Ubicacion 2</h2>";
	echo "<input type='text' name='ubicacion2' value='$ubicacion2'><br>";
	echo "<h2>Foto</h2>";
    echo "<input type='file' name='foto' value='$foto'><br><br>";	
	echo "<input type='radio' name='fav' value='1'> Favorito";
	echo "<input type='radio' name='fav' value='2' checked> No Favorito<br>";
	echo "<input type='hidden' name='id_contactos' value='$id_contactos'>";
?>
<br>
<input type="submit" name="enviar">
</form>
</body>
</html>
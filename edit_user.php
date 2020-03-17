<!DOCTYPE html>
<html>
<head>
	<title>modificar contacto</title>
</head>
<body>
	<?php
	include "connection.php";

	//falta cambiar numero por el contacto deseado
	
	$id_user=$_REQUEST['id_user'];
	$query= ("SELECT * FROM user WHERE id_user='$id_user'");
    $result= mysqli_query($conexion, $query);
    $value=mysqli_fetch_array($result);
    $nombre=$value['nombre'];
    $apellido=$value['apellidos'];
    $email=$value['email'];
    $telefono=$value['telefono'];
    $ubicacion1=$value['direccion1'];
    $foto=$value['foto'];

    echo "<div style='background-color: #9CFFFC; height: 100%; text-align: center; padding-top: 1px;'>
    <h2>Editor de usuarios</h2>
<div style=' margin-top: 2%; border-color: white; width: 40%; padding-bottom: 3%; margin-left: 30%; padding-top: 1%; border: 5px solid; border-color: white;'>

	<form action='edit_user.proc.php' method='POST'>
	<h2>Nombre</h2>
	<input type='text' name='nombre' value='$nombre'><br>
	<h2>Apellido</h2>
	<input type='text' name='apellido' value='$apellido'><br>
	<h2>Email</h2>
	<input type='text' name='email' value='$email'><br>
	<h2>Teléfono</h2>
	<input type='text' name='telefono' value='$telefono'><br>
	<h2>Ubicación 1</h2>
	<input type='text' name='ubicacion1' value='$ubicacion1'><br>
	<h2>Foto</h2>
    <input type='file' name='foto' value='$foto'><br><br>
	<input type='hidden' name='id_user' value='$id_user'>

</div>";

?>
<br>
<input style="width: 10%;" type="submit" name="Editar">
<br><br>
<br><br>
<br>
<?php
echo "</div>";
?>
</form>
</body>
</html>
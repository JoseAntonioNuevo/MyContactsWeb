<!DOCTYPE html>
<html>
<head>
	<title>Edita tu contacto</title>
</head>
<body>
	<?php
	include "connection.php";

$id=$_REQUEST['id'];

$query= ("SELECT * FROM contactos INNER JOIN telefonos ON contactos.id_contactos=telefonos.id_contacto WHERE contactos.id_contactos='$id'");
$result= mysqli_query($conexion, $query);
$value=mysqli_fetch_array($result);
$nombre=$value['nombre'];
$apellido=$value['apellido'];
$email=$value['email'];
$telefono=$value['telefono'];
$ubicacion1=$value['direccion1'];
$ubicacion2=$value['direccion2'];
$foto=$value['foto'];

    echo "<div style=' height: 100%; text-align: center; padding-top: 1px;'>
<div style=' border-color: white; width: 40%; margin-left: 30%; border: 2px solid; border-color: black; margin-top: 1%;'>
	<form action='edit_contact.proc.php' method='POST'>
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
	<h2>Ubicacion 2</h2>
	<input type='text' name='ubicacion2' value='$ubicacion2'><br>
	<h2>Foto</h2>
    <input type='file' name='foto' value='$foto'><br><br>
	<input type='hidden' name='id_user' value='$id'>
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
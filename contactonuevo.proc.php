<?PHP
include "connection.php";

session_start();
$id=$_SESSION['id'];
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$email = $_REQUEST['email'];
$telefono = $_REQUEST['telefono'];
$ubicacion1 = $_REQUEST['ubicacion1'];
$ubicacion2 = $_REQUEST['ubicacion2'];
$fav = $_REQUEST['fav'];
$foto=$_REQUEST['foto2'];

if ($foto=="") {
$foto="nofoto.jpg";
}

//Inserción de contactos en la base de datos
$query="INSERT INTO `contactos` (`foto`, `nombre`, `apellido`, `email`, `direccion1`, `direccion2`, `favoritos`, `user_fk`, `estado`) VALUES
('$foto', '$nombre', '$apellido', '$email', '$ubicacion1', '$ubicacion2', '$fav', '$id', 1)";
$result =mysqli_query($conexion, $query);

$sql="SELECT id_contactos FROM contactos WHERE nombre='$nombre' AND apellido='$apellido' AND email='$email' AND user_fk='$id' AND direccion1='$ubicacion1' AND direccion2='$ubicacion2' AND favoritos='$fav' AND foto='$foto'";
$result =mysqli_query($conexion, $sql);
$value=mysqli_fetch_array($result);
$id_con=$value['id_contactos'];

$query="INSERT INTO `telefonos` (`telefono`, `id_contacto`) VALUES
('$telefono', '$id_con')";
$result =mysqli_query($conexion, $query);

header("location: home.php");
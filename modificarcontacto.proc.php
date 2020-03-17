<?PHP
include "connection.php";

session_start();
$id=$_SESSION['id'];
$id_contactos = $_REQUEST['id_contactos'];
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$email = $_REQUEST['email'];
$telefono = $_REQUEST['telefono'];
$ubicacion1 = $_REQUEST['ubicacion1'];
$ubicacion2 = $_REQUEST['ubicacion2'];
$fav = $_REQUEST['fav'];
$foto=$_REQUEST['foto'];

if ($foto<>"") {
$query="Update contactos Set foto='$foto' Where id_contactos='$id_contactos'";
$result =mysqli_query($conexion, $query);
}

$query="Update contactos Set nombre='$nombre' Where id_contactos='$id_contactos'";
$result =mysqli_query($conexion, $query);

$query="Update contactos Set apellido='$apellido' Where id_contactos='$id_contactos'";
$result =mysqli_query($conexion, $query);

$query="Update contactos Set email='$email' Where id_contactos='$id_contactos'";
$result =mysqli_query($conexion, $query);

$query="Update contactos Set direccion1='$ubicacion1' Where id_contactos='$id_contactos'";
$result =mysqli_query($conexion, $query);

$query="Update contactos Set direccion2='$ubicacion2' Where id_contactos='$id_contactos'";
$result =mysqli_query($conexion, $query);

$query="Update contactos Set favoritos='$fav' Where id_contactos='$id_contactos'";
$result =mysqli_query($conexion, $query);

$query="Update telefonos Set telefono='$telefono' Where id_contacto='$id_contactos'";
$result =mysqli_query($conexion, $query);

echo "Contacto ".$nombre." modificado correctamente";
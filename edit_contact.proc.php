<?PHP
include "connection.php";

$id_contacto = $_REQUEST['id_user'];
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$email = $_REQUEST['email'];
$telefono = $_REQUEST['telefono'];
$ubicacion1 = $_REQUEST['ubicacion1'];
$ubicacion1 = $_REQUEST['ubicacion2'];
$foto=$_REQUEST['foto'];

if ($foto<>"") {

$query="Update contactos Set foto='$foto' Where id_contacto='$id_contacto'";
$result =mysqli_query($conexion, $query);

}

$query="Update contactos Set nombre='$nombre' Where id_contactos='$id_contacto'";
$result =mysqli_query($conexion, $query);

$query="Update contactos Set apellido='$apellido' Where id_contactos='$id_contacto'";
$result =mysqli_query($conexion, $query);

$query="Update contactos Set email='$email' Where id_contactos='$id_contacto'";
$result =mysqli_query($conexion, $query);

$query="Update telefonos Set telefono='$telefono' Where id_contactos='$id_contacto'";
$result =mysqli_query($conexion, $query);

$query="Update contactos Set direccion1='$ubicacion1' Where id_contactos='$id_contacto'";
$result =mysqli_query($conexion, $query);

header("location:home.php");
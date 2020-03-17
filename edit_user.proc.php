<?PHP
include "connection.php";

$id_user = $_REQUEST['id_user'];
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$email = $_REQUEST['email'];
$telefono = $_REQUEST['telefono'];
$ubicacion1 = $_REQUEST['ubicacion1'];
$foto=$_REQUEST['foto'];

if ($foto<>"") {

$query="Update user Set foto='$foto' Where id_user='$id_user'";
$result =mysqli_query($conexion, $query);

}

$query="Update user Set nombre='$nombre' Where id_user='$id_user'";
$result =mysqli_query($conexion, $query);

$query="Update user Set apellido='$apellido' Where id_user='$id_user'";
$result =mysqli_query($conexion, $query);

$query="Update user Set email='$email' Where id_user='$id_user'";
$result =mysqli_query($conexion, $query);

$query="Update user Set telefono='$telefono' Where id_user='$id_user'";
$result =mysqli_query($conexion, $query);

$query="Update user Set direccion1='$ubicacion1' Where id_user='$id_user'";
$result =mysqli_query($conexion, $query);

header("location:administracion_usuarios.php");
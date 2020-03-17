<!DOCTYPE html>
<html>
<head>
	<title>cambios users</title>
</head>
<body>
<?php
include "connection.php";
$caso=$_REQUEST['option'];
$id_user=$_REQUEST['user'];

switch ($caso) {
	case '1':
$x= ("UPDATE user SET estado=2 WHERE id_user=".$id_user);
$resultado =mysqli_query($conexion, $x);
include "administrar_usuarios_tabla.php";
		break;
	
	case '2':
$x= ("UPDATE user SET estado=3 WHERE id_user=".$id_user);
$resultado =mysqli_query($conexion, $x);
include "administrar_usuarios_tabla.php";
		
		break;

	case '3':
$x= ("UPDATE user SET estado=1 WHERE id_user=".$id_user);
$resultado =mysqli_query($conexion, $x);
include "administrar_usuarios_tabla.php";
		
		break;

	   case '4':
$x= ("UPDATE user SET estado=1 WHERE id_user=".$id_user);
$resultado =mysqli_query($conexion, $x);
include "eliminados.table.php";
		
		break;

	   case '5':
$x= ("UPDATE contactos SET favoritos=2 WHERE id_contactos=".$id_user);
$resultado =mysqli_query($conexion, $x);
include "infocontacto.php";
		
		break;

	  case '6':
$x= ("UPDATE contactos SET favoritos=1 WHERE id_contactos=".$id_user);
$resultado =mysqli_query($conexion, $x);
include "infocontacto.php";
		
		break;
}
?>
</body>
</html>
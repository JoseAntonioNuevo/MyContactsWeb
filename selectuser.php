<!DOCTYPE html>
<html>
<head>
		<link rel="icon" type="image/png" href="./imagenes/logo.png" />
	<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="ajax2.js"></script>
	<title>cambios users</title>
</head>
<body>
<?php
include "connection.php";
if (isset($_REQUEST['id'])) {
$id_contacto=$_REQUEST['id'];
}

if (isset($_REQUEST['option'])) {
	
$caso=$_REQUEST['option'];
$id_user=$_REQUEST['id'];

switch ($caso) {
	    case '3':
		$x= ("UPDATE contactos SET estado=3 WHERE id_contactos=".$id_user);
$resultado =mysqli_query($conexion, $x);
		break;

		case '4':
		$x= ("UPDATE contactos SET estado=1 WHERE id_contactos=".$id_user);
$resultado =mysqli_query($conexion, $x);
		break;

	case '5':
		$x= ("UPDATE contactos SET favoritos=2 WHERE id_contactos=".$id_user);
$resultado =mysqli_query($conexion, $x);
		break;
	
	case '6':
		$x= ("UPDATE contactos SET favoritos=1 WHERE id_contactos=".$id_user);
$resultado =mysqli_query($conexion, $x);
		break;
}
	
}
include "infocontacto.php";
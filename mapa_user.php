<!DOCTYPE html>
<html>
<head>
	<title>mapa</title>
	<link rel="icon" type="image/png" href="./imagenes/logo.png" />
	<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="ajax2.js"></script>
</head>
<body onload="consulta(3,1)">
<?php
include "header3.php";
if (isset($_SESSION['id'])) {


include "contactos2.php";
include "mapa.php";

}else{
	header("location: index.php");
}
?>
</body>
</html>
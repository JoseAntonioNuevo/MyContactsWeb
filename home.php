<!DOCTYPE html>
<html>
<head>
	<title>HOME - MyContacts</title>
	<link rel="icon" type="image/png" href="./imagenes/logo.png" />
	<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="ajax2.js"></script>
</head>
<body onload="consultar(3,1)">

<?php

include "header.php";
if (isset($_SESSION['id'])) {
include "contactos.php";
echo "<div id='sol' class='infocontacto1'>"; 

}else{
	header("location: index.php");
}
?>
</body>
</html>
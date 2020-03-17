<!DOCTYPE html>
<html>
<head>
	<title>mapa</title>
	<link rel="icon" type="image/png" href="./imagenes/logo.png" />
	<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="ajax2.js"></script>
</head>
<body>
<?php
include "header4.php";
if (isset($_SESSION['id'])) {

include "mapatodos.php";
}else{
	header("location: index.php");
}
?>
</body>
</html>
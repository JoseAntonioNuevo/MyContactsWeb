<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" type="image/png" href="./imagenes/logo.png" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

include "header.php";

$id =$_REQUEST['user'];
$sql ="SELECT * FROM contactos WHERE id_contactos='$id'";
$result= mysqli_query($conexion, $sql);
        $value=mysqli_fetch_array($result);
        $nombre=$value['nombre'];

?>
<div class="header" style="border: 1px solid #000; width: 30%;
	margin: 50px auto 0px;
	color: white;
	background: #5F9EA0;
	text-align: center;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;">
			<h2>Añadir telefono de <?php echo $nombre ?> </h2>
		</div>
<form method="post" action="telefnuevo.proc.php" style="border: 1px solid #000; background: #DBDEDF; width: 30%;
	margin: 0px auto;
	padding: 20px;
	background: white;
	border-radius: 0px 0px 10px 10px;">
		
			<p id="mensaje" class="mensaje"></p>
			<div class="input-group" >
				<label>Telefono</label>
				<input type="number" name="telefono" id="telefono">
			</div>
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<div class="input-group">
				<button type="submit" name="login" class="btn" style="padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border: none;
	border-radius: 5px;">Meter telefono nuevo</button>
			</div>
			
		</form>
</body>
</html>
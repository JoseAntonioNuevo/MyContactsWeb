<!DOCTYPE html>
<html>
<head>
	<title>My Contacts</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="codigo.js"></script>
</head>
<body background="imagenes/fondo.jpg">
	<div class="opacity">
		<div class="header" style="border: 1px solid #000; width: 30%;
	margin: 50px auto 0px;
	color: white;
	background: #5F9EA0;
	text-align: center;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;">
			<h2>Iniciar sesión</h2>
		</div>

		<form method="post" action="./login.proc.php" onsubmit="return formulario()" style="border: 1px solid #000; background: #DBDEDF; width: 30%;
	margin: 0px auto;
	padding: 20px;
	background: white;
	border-radius: 0px 0px 10px 10px;">
		<?php

			if (isset($_REQUEST['mensaje'])){
				$mensaje=$_REQUEST['mensaje'];
				echo $mensaje;
				}
			?> 
			<p id="mensaje" class="mensaje"></p>
			<div class="input-group" >
				<label>Usuario</label>
				<input type="text" name="user" id="user">
			</div>
			<div class="input-group">
				<label>Contraseña</label>
				<input type="password" name="pass" id="pass">
			</div>
			<div class="input-group">
				<button type="submit" name="login" class="btn" style="padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border: none;
	border-radius: 5px;">Iniciar sesión</button>
			</div>
			<p>
				¿Todavía no eres miembro? <a href="registro.php">Regístrate</a>
			</p>
		</form>
	</div>
</body>
</html>
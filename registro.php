<!DOCTYPE html>
<html>
<head>
	<title>My Contacts</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" >
		//Crear usuarios
function formulario(){

	var mensaje='Errores:<br>';
	var showErrors=false;
	var valid=true;

	
		var usu = document.getElementById('usu').value;
		var username = document.getElementById('username').value;
		var apellido = document.getElementById('apellido').value;
		var email = document.getElementById('email').value;
		var password_1 = document.getElementById('password_1').value;
		if(usu!=''){

			if(username==''){
				mensaje=mensaje+'- Nombre*<br>';
				showErrors=true;
			}
			if(apellido==''){
				mensaje=mensaje+'- Apellido*<br>';
				showErrors=true;
			}
			if(email==''){
				mensaje=mensaje+'- Email*<br>';
				showErrors=true;
			}
			
			if(password_1==''){
				mensaje=mensaje+'- Password*<br>';
				showErrors=true;
			}

			if(showErrors){
				document.getElementById('error').innerHTML=mensaje;
				valid=false;
			}else{
				document.getElementById('error').innerHTML='';
			}
			mensaje='Errores:<br>';
			showErrors=false;
		}else{
			mensaje="";
		}	
	}
	return valid;


	</script>
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
			<h2>Registro</h2>
		</div>

		<form method="post" enctype="multipart/form-data" action="registro.proc.php" onsubmit="return formulario()" style="border: 1px solid #000; background: #DBDEDF; width: 30%;
	margin: 0px auto;
	padding: 20px;
	background: white;
	border-radius: 0px 0px 10px 10px;">
		<div class="input-group">
			<label>Usuario</label>
			<input type="text" name="usu" id="usu">
		</div>
		<div class="input-group">
			<label>Nombre</label>
			<input type="text" name="username" id="username">
		</div>
		<div class="input-group">
			<label>Apellido</label>
			<input type="text" name="apellido" id="apellido">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" id="email">
		</div>
		<div class="input-group">
			<label>Telefono</label>
			<input type="number" name="telefono" id="telefono">
		</div>
		<div class="input-group">
			<label>Direccion</label>
			<input type="text" name="direccion" id="direccion">
		</div>
		<div class="input-group">
			<label>Contraseña</label>
			<input type="password" name="password_1" id="password_1">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn" style="padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border: none;
	border-radius: 5px;">Registrarse</button>
		</div>
		<?php
		echo "<br><p id='error' style='color:red;'></p>";
		?>
		<p>
			¿Ya eres usuario? <a href="index.php">Entra</a>
		</p>
	</form>
	</div>
</body>
</html>
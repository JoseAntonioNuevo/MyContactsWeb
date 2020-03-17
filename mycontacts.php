<!DOCTYPE html>
<html>
<head>
	<title>MyContacts</title>
	<link rel="icon" type="image/png" href="" />	
	<script type="text/javascript" src="ajax2.js"></script>
</head>
<body style="margin: 0; padding: 0">
	<h1 style="text-align: center;">MyContacts</h1>
	<div>
		<form  onsubmit="consultar(); return false">
			<input type="text" id="contacto" autofocus placeholder="Contacto..." onkeyup="consultar()">
			<input type="submit" name="Buscar" value="Buscar">
		</form>
	</div>
	<!-- <div style="height: 10px; width: 100%; background-color: #313131;"></div>
	<div style="height: 95px; width: 100%; background-color: white;"> -->
	<!-- <br>
	<form method="#" action="#" onsubmit="registrar(); return false" style="text-align: center;">
		<input type="text" name="num" id="num" placeholder="Id_pokedex" >
		
		<input type="text" name="nombre" id="nombre" placeholder="Nombre" >
		
		<input type="text" name="peso" id="peso" placeholder="Peso" >
		
		<input type="text" name="altura" id="altura" placeholder="Altura" >
		
		<input type="submit" name="Enviar" value="Registrar Pokemon">
	</form> -->
		<!--***************************************************************
		PRIMER PUNTO: Registrar un nuevo pokémon
			El formulario ha de recojer los siguientes campos:
			- numero_pokedex
			- nombre
			- peso
			- altura

			y llamar a la función registrar() sin recargar la página.

			Nota: Al enviar el registro se han de limpiar los inputs, 
			para ello implementaremos una función limpiar() que lo haga.
		****************************************************************-->
	</div>
	
	<div id="mensaje"></div>

	<div id="resultado"></div>

</body>
</html>
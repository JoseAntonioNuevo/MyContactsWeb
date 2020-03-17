<!DOCTYPE html>
<html>
<head>
	<title>nuevo contacto</title>
</head>
<body>
<form action="contactonuevo.proc.php" method="POST">
	<h2>Nombre</h2>
	<input type="text" name="nombre">
<br>
	<h2>Apellido</h2>
	<input type="text" name="apellido">
<br>
	<h2>Email</h2>
	<input type="text" name="email">
<br>
	<h2>Teléfono</h2>
	<input type="text" name="telefono">
<br>
	<h2>Ubicación 1</h2>
	<input type="text" name="ubicacion1">
<br>
	<h2>Ubicacion 2</h2>
	<input type="text" name="ubicacion2">
<br>
    <h2>Foto</h2>
    <input type="file" name="foto">	
    
<br><br><br>
	<input type="radio" name="fav" value="1">Favorito
	<input type="radio" name="fav" value="2" checked> No Favorito<br>
<br><br>
<input type="submit" name="enviar">
<br>
</form>
</body>
</html>
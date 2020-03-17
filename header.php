<div class="header">
		
		<a href="home.php"><img src="./imagenes/logo.png" class="logo"></a>

		<div class="bienvenida">
			<p><b>Bienvenido a MyContacts</b></p>
		</div>

		<div class="cerrarsesion">
			
		<?php
		include "connection.php";
			session_start();
			if(isset($_SESSION['id'])){
				echo "<a class='cierra' href='logout.proc.php'><b>Cerrar sesión de ".$_SESSION['nombre']."</b></a>&nbsp;&nbsp;";
			}else{
				header("Location: index.php");			
			}
		?>

		</div>
	</div>

	<div class="subheader">
		
			<div class="btn"> <button class="boton1" type="button"><a href="#miModal" style="color: white; font-size: 18px;"><b>Nuevo contacto</b></a></button></div>


	<div id="miModal" class="modal">
		<img src="./imagenes/logo.png" class="logomodal">
		<img src="./imagenes/usuarionuevo.png" class="usuariomodal">
		  <div class="modal-contenido">
		    <a href="#" style="float: right; text-decoration: none"><b>X</b></a>
			    <form action="contactonuevo.proc.php" style="position: relative;" method="POST">
					<h2>Nombre de contacto</h2>
					<input type="text" name="nombre">
				<br>
					<h2>Apellido</h2>
					<input type="text" name="apellido">
				<br>
					<h2>Email</h2>
					<input type="text" name="email">
				<br>
					<h2>Teléfono de contacto</h2>
					<input type="text" name="telefono">
				<br>
					<h2>Ubicación 1 (calle y ciudad)</h2>
					<input type="text" name="ubicacion1">
				<br>
					<h2>Ubicacion 2 (calle y ciudad)</h2>
					<input type="text" name="ubicacion2">
				<br>
				    <h2>Foto</h2>
				    <input type="file" name="foto2">	
				    
				<br><br><br>
					<input type="radio" name="fav" value="1">Favorito
					<input type="radio" name="fav" value="2" checked> No Favorito<br>
				<br><br>
				<input type="submit" style="width: 20%;" name="enviar">
				<br>
				</form>
		  </div>
	</div>


	<div class="opciones">
			<img src="./imagenes/location.png" class="administrar">
			<a href="mapa_user.php" class="opcionadmin"> Mapa de ubicaciones</a>
		</div>

<?php
if ($_SESSION['id']==1){
?>
		<div class="opciones2">
			<img src="./imagenes/ajustes.png" class="administrar">
			<a href="administracion_usuarios.php" class="opcionadmin"> Administrar Usuarios</a>
		</div>
<?php
}
?>
	</div>

	<div class="menuleft">
		<div class="btnfav"> <a href="#" onclick='consultar("3","1"); return false'><button class="boton5"><b>Mis Contactos</b></button></div></a>

		<div class="btnfav"> <a href="#" onclick='consultar("2","1"); return false'><button class="boton5"><b>Favoritos</b></button></div></a>

		<div class="btnfav"> <a href="#" onclick='consultar("3","3"); return false'><button class="boton5"><b>Eliminados</b></button></div></a>
	</div>

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
		
		<div class="btn"> <button class="boton1" type="button">Nuevo contacto</button></div></a>



		<div class="opciones">
			<img src="./imagenes/cont.png" class="administrar">
			<a href="home.php" class="opcionadmin"> Informacion Contactos</a>
		</div>

<div class="opciones2">
			<img src="./imagenes/location.png" class="administrar">
			<a href="mapa_user.php" class="opcionadmin"> Mapa de ubicaciones</a>
		</div>



<?php
if ($_SESSION['id']==1){
?>
		<div class="opciones3">
			<img src="./imagenes/ajustes.png" class="administrar">
			<a href="administracion_usuarios.php" class="opcionadmin"> Administrar Usuarios</a>
		</div>
<?php
}
?>

	<div class="menuleft">
		<div class="btnfav"> <a href="home.php"><button class="boton5"><b>Mis Contactos</b></button></div></a>

		<div class="btnfav"> <a href="home.php"><button class="boton5"><b>Favoritos</b></button></div></a>

		<div class="btnfav"> <a href="home.php"><button class="boton5"><b>Eliminados</b></button></div></a>
	</div>

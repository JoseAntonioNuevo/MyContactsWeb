<?php

include "connection.php";

//Falta cambiar el id
$sql= "DELETE FROM contactos WHERE id_contactos = '4'"; 
$result= mysqli_query($conexion, $sql);

header("location: home.php");
?>
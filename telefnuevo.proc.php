<?php
include "connection.php";

$telefono = $_REQUEST['telefono'];
$id = $_REQUEST['id'];
echo $id;
$ql= "INSERT INTO telefonos (telefono, id_contacto) VALUES ('$telefono', '$id')";
mysqli_query($conexion, $ql);
header("location: home.php");
?>
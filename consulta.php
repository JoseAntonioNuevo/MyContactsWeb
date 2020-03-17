<?php
  include "connection.php";

  session_start();
$id=$_SESSION['id'];

$fav=$_REQUEST['fav'];
$eli=$_REQUEST['eliminado'];


  if(isset($_REQUEST['q'])){
  	$sql=mysqli_query($conexion,"SELECT * FROM contactos WHERE user_fk='$id' AND favoritos!='$fav' AND estado=$eli AND nombre LIKE '%".$_REQUEST['q']."%' ORDER BY id_contactos");
  }else{
  	$sql=mysqli_query($conexion,"SELECT * FROM contactos WHERE user_fk='$id' AND favoritos!='$fav' AND estado=$eli ORDER BY id_contactos");
  }

  $contactos=array();
  while($row = mysqli_fetch_assoc($sql)){
    $contactos[]=$row;
  }
  print json_encode($contactos);
?>
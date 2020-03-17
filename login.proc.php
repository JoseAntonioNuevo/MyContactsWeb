<?PHP
include "connection.php";

$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];

$encript = md5($pass);

if(isset($_REQUEST['user'])){

$query= ("SELECT fk_user FROM login WHERE user='$user'");
$result= mysqli_query($conexion, $query);
$value=mysqli_fetch_array($result);
$id_user=$value['fk_user'];
}


$query= ("SELECT estado FROM user WHERE id_user='$id_user'");
$result= mysqli_query($conexion, $query);
while ($value=mysqli_fetch_array($result)) {
$usuario=$value['estado'];
}

if ($usuario==2) {

echo "<div style='background-color: #9CFFFC; height: 100%; text-align: center;'>
<div style=' border-color: white; width: 40%; padding-bottom: 3%; margin-left: 30%; padding-top: 13%;'>
<img style='margin-top: 10%; width: 15%;' src='./imagenes/bloqueado.png'>
<p style='padding-top: 1%; font-size:35px;'><b>El usuario al que intentas acceder esta bloqueado!</b></p>
<input type='button' value='Volver' onClick='history.go(-1);'>
</div>
</div>";

}else if ($usuario==3){

echo "<div style='background-color: #9CFFFC; height: 100%; text-align: center;'>
<div style=' border-color: white; width: 40%; padding-bottom: 3%; margin-left: 30%; padding-top: 13%;'>
<img style='margin-top: 10%; width: 15%;' src='./imagenes/eliminado.png'>
<p style='padding-top: 1%; font-size:35px;'><b>El usuario al que intentas acceder esta eliminado!</b></p>
<input type='button' value='Volver' onClick='history.go(-1);'>
</div>
</div>";

}else{

$query= ("SELECT * FROM login WHERE user='$user' AND password='$encript'");

$result =mysqli_query($conexion, $query);

	session_start();
    $_SESSION['nombre']=$user;


if (!empty($result) && mysqli_num_rows($result)==1) {
	$value=mysqli_fetch_array($result);
    $id=$value['id_login'];
	$_SESSION['id']=$id;
	header("Location: home.php");
}else{
	header("Location: index.php");

}
}
?>
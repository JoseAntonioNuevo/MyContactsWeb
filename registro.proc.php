<?PHP
include "connection.php";

session_start();

	$username = "";
	$email = "";



	// si se hace clic en el botón registrador
	if (isset($_POST['register'])) {
		$usu = addslashes(trim($_POST['usu']));
		$username = addslashes(trim($_POST['username']));
		$apellido = addslashes(trim($_POST['apellido']));
		$email = addslashes(trim($_POST['email']));
		$telefono = addslashes(trim($_POST['telefono']));
		$direccion = addslashes(trim($_POST['direccion']));
		$password_1 = addslashes(trim($_POST['password_1']));
		$encript = md5($password_1);

	$q = "SELECT user FROM login WHERE user='$usu'";
	$ql=mysqli_query($conexion,$q);

		//Si no hay errores, guarde el usuario en la base de datos.
		if (!empty($ql)&& mysqli_num_rows($ql)==1) {
			
			echo "El usuario ya esta registrado";

		}else{
			
			$password_1 = $password_2; // cifrar la contraseña antes de almacenar en la base de datos (seguridad)
			$sq = "INSERT INTO user (foto, nombre, apellidos, email, telefono, direccion1, estado) VALUES ('nofoto.jpg', '$username', '$apellido','$email','$telefono','$direccion', 1)";
			mysqli_query($conexion, $sq);

			$l = ("SELECT * FROM user WHERE nombre='$username'");
			
			$result=mysqli_query($conexion, $l);

	
			$value=mysqli_fetch_array($result);
			 $id=$value['id_user'];
			$_SESSION['id']=$id;

			$sql = "INSERT INTO login (user, password, fk_user) 
						VALUES ('$usu', '$encript','$id')";

			mysqli_query($conexion, $sql);
			
						}
	}
	header("location:index.php");

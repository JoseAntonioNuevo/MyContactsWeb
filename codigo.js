
//Login

function formulario(){

	var username = document.getElementById('user').value;
	var password = document.getElementById('pass').value;
	if(username == '' && password == ''){
		document.getElementById('mensaje').innerHTML = '¡El campo usuario y la contraseña son obligatorios!';	
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('mensaje').style.border = "thick solid red";
		document.getElementById('user').style.border = '1px solid red';
		document.getElementById('pass').style.border = '1px solid red';
		return false;	
	}else if (username == '') {
		document.getElementById('mensaje').innerHTML = '¡El campo usuario es obligatorio!';
		document.getElementById('mensaje').style.display = 'block';	
		document.getElementById('mensaje').style.border = "thick solid red";
		document.getElementById('user').style.border = '1px solid red';
		document.getElementById('pass').style.border = '1px solid #ccc';
		return false;
	}else if (password == '') {
		document.getElementById('mensaje').innerHTML = '¡La contraseña es obligatoria!';
		document.getElementById('mensaje').style.display = 'block';	
		document.getElementById('mensaje').style.border = "thick solid red";
		document.getElementById('user').style.border = '1px solid #ccc';
		document.getElementById('pass').style.border = '1px solid red';
		return false;
	}else{
		return true;
	}
}
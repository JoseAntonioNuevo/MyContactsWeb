function formulario(){
alert('hola');
	var mensaje='Errores:<br>';
	var showErrors=false;
	var valid=true;

		var username = document.getElementById('username').value;
		var email = document.getElementById('email').value;
		var password_1 = document.getElementById('password_1').value;
		var password_2 = document.getElementById('password_2').value;
		if(username!=''){

			
			if(email==''){
				mensaje=mensaje+'- Email*<br>';
				showErrors=true;
			}
			
			if(password_1==''){
				mensaje=mensaje+'- Password*<br>';
				showErrors=true;
			}
			if(password_2==''){
				mensaje=mensaje+'- Confirmar Password*<br>';
				showErrors=true;
			}
			if(password_1!='' && password_2!='' && password_1!=password_2){
				mensaje=mensaje+'- Los Passwords no coinciden*<br>';
				showErrors=true;
			}
			if(showErrors){
				document.getElementById('error').innerHTML=mensaje;
				valid=false;
			}else{
				document.getElementById('error').innerHTML='';
			}
			mensaje='Errores:<br>';
			showErrors=false;
		}else{
			mensaje="";
		}	
	}
	return valid;




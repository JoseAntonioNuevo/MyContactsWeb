// 1. Definimos el objeto XMLHttpRequest (XHR)
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
		try {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
		}
	}
 
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function modificarUsuario(user,option){
	// 2. Definimos el bloque que queremos que cambie
	divResultado = document.getElementById('resultado');
	// 3. Inicializamos el objeto XHR
	ajax=objetoAjax();
	// 4. Especificamos la solicitud
	ajax.open('POST', 'change_user.php', true);
	// 5. Configuramos el encabezado (POST)
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	// 6. Enviamos la solicitud
	ajax.send("option="+option+"&user="+user)
	// 7. Definimos la función que se ejecutará cuando cambie la propiedad readyState
	ajax.onreadystatechange=function() {
	  	if (ajax.readyState==4) {
			// 8. Cambiamos el bloque del paso 2.
			divResultado.innerHTML = ajax.responseText
		}
	}
}

/*
1. The XMLHttpRequest object can be used to exchange data with a server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.

4. open(method,url,async,user,psw):
	Specifies the request
	method: the request type GET or POST
	url: the file location
	async: true (asynchronous) or false (synchronous)
	user: optional user name
	psw: optional password

5. setRequestHeader(): Adds a label/value pair to the header to be sent

6. 	send()
		Sends the request to the server
		Used for GET requests
	send(string)	
		Sends the request to the server.
		Used for POST requests

7.
onreadystatechange: Defines a function to be called when the readyState property changes
readyState: Holds the status of the XMLHttpRequest.
	0: request not initialized
	1: server connection established
	2: request received
	3: processing request
	4: request finished and response is ready

8. responseText: Returns the response data as a string
*/
window.onload = consultar;

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

// /*Insertar registro en la base de datos*/
// function registrar(){
// 	/*código a implementar*/
// 	divResultado = document.getElementById('mensaje');
// 	num = document.getElementById('num').value;
// 	nombre = document.getElementById('nombre').value;
// 	peso = document.getElementById('peso').value;
// 	altura = document.getElementById('altura').value;

// 	ajax=objetoAjax();

// 	ajax.open("POST", "../services/registro.php", true);
// 	ajax.onreadystatechange=function() {
// 		if (ajax.readyState==4 && ajax.status==200) {
// 	  		respuesta=eval("("+ajax.responseText+")");
// 	  		if(respuesta.resultado=="OK") {
// 	  			divResultado.innerHTML = "POKEMON REGISTRADO."
	  			
// 	  		} else {
// 	  			divResultado.innerHTML = "NO SE HA PODIDO REGISTRAR EL POKEMON."
// 	  		}
// 			/*Muestra registros de la base de datos*/
// 			consultar();
// 			limpiar();
			
// 		}
// 	}
// 	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
// 	ajax.send("num="+num+"&nombre="+nombre+"&peso="+peso+"&altura="+altura)
// }

// /*Actualizar registro en la base de datos*/
// function actualizar(){
// 	/*código a implementar*/
// }

/*Muestra registros de la base de datos*/
function consultar(fav, eliminado){
	divResultado = document.getElementById('resultado');
	contacto = document.getElementById('contacto').value;
	var ajax2=objetoAjax();
	var id;

	ajax2.open("POST", "consulta.php", true);
	ajax2.onreadystatechange=function() {
		if (ajax2.readyState==4 && ajax2.status==200) {
			var respuesta2=JSON.parse(ajax2.responseText);
			var tabla =  '<table style="color:#000099;padding: 10px 15%;"><tr style="background:#9BB;"></tr>';
			for(var i=0;i<respuesta2.length;i++) {
				id=respuesta2[i].id_contactos;
				tabla +='<tr><td style=" text-align: center ; padding-top: 3%;"><img style="width:60px;height:60px;border-radius:150px;" src="./img/'+respuesta2[i].foto+'"> <td style="margin-left: -5%; width:60%; color: black"><a href=infocontacto.php onclick="variable('+id+'); return false"><b>'+respuesta2[i].nombre+'</b><b> '+respuesta2[i].apellido+'</b></td></td>';
				// if (respuesta2[i].favorito==1) {
				// 	tabla +='<td><a href="" ><img src="../img/pokemon.png" width="20px" height="20px"/></a></td>'
				// }else{
				// 	tabla +='<td><a href="" ><img src="../img/pokemon.png" width="20px" height="20px" style="opacity:0.4;/"></a></td>'
				// }

				tabla +='<td></a></td></tr>';
				
				
				/****************************************************************
				SEGUNDO PUNTO: Añadir a la tabla las columnas de peso y altura de 
				un pokémon.
				****************************************************************/
				/****************************************************************
				TERCER PUNTO: Añadir a la tabla la columna de pokémon favorito.
				Cuando el pokémon tenga el campo favorito con valor "0" la pokéball
				ha de verse opaca (usar la propiedad "opacity: 0.2;")
				Se ha de poder dar/quitar favorito a cada pokémon. Para ello ha de
				mostrarse un enlace en cada registro de la tabla.
				****************************************************************/
			}
			tabla+='</table>';
			divResultado.innerHTML=tabla;
		
		}
	}
	if(contacto!='' || contacto!=null){
		ajax2.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax2.send("q="+contacto+"&fav="+fav+"&eliminado="+eliminado)
	}else{
		ajax2.send();
	}
}

// function limpiar(){
// 	/*código a implementar*/

// 	num = document.getElementById('num').value='';
// 	nombre = document.getElementById('nombre').value='';
// 	peso = document.getElementById('peso').value='';
// 	altura = document.getElementById('altura').value='';
// }

function consulta(fav, eliminado){
	divResultado = document.getElementById('resultado');
	contacto = document.getElementById('contacto').value;
	var ajax2=objetoAjax();
	var id;

	ajax2.open("POST", "consulta.php", true);
			var respuesta2=JSON.parse(ajax2.responseText);
			var tabla =  '<table style="color:#000099;padding: 10px 15%;"><tr style="background:#9BB;"></tr>';
			for(var i=0;i<respuesta2.length;i++) {
				id=respuesta2[i].id_contactos;
				tabla +='<tr><td style=" text-align: center ; padding-top: 3%;"><img style="width:60px;height:60px;border-radius:150px;" src="./img/'+respuesta2[i].foto+'"> <td style="margin-left: -5%; width:60%; color: black"><a href="mapa_user.php?id='+id+'"><b>'+respuesta2[i].nombre+'</b><b> '+respuesta2[i].apellido+'</b></td></td>';
				// if (respuesta2[i].favorito==1) {
				// 	tabla +='<td><a href="" ><img src="../img/pokemon.png" width="20px" height="20px"/></a></td>'
				// }else{
				// 	tabla +='<td><a href="" ><img src="../img/pokemon.png" width="20px" height="20px" style="opacity:0.4;/"></a></td>'
				// }

				tabla +='<td></a></td></tr>';
				
				
				/****************************************************************
				SEGUNDO PUNTO: Añadir a la tabla las columnas de peso y altura de 
				un pokémon.
				****************************************************************/
				/****************************************************************
				TERCER PUNTO: Añadir a la tabla la columna de pokémon favorito.
				Cuando el pokémon tenga el campo favorito con valor "0" la pokéball
				ha de verse opaca (usar la propiedad "opacity: 0.2;")
				Se ha de poder dar/quitar favorito a cada pokémon. Para ello ha de
				mostrarse un enlace en cada registro de la tabla.
				****************************************************************/
			}
			tabla+='</table>';
			divResultado.innerHTML=tabla;
		
		
	
	if(contacto!='' || contacto!=null){
		ajax2.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax2.send("q="+contacto+"&fav="+fav+"&eliminado="+eliminado)
	}else{
		ajax2.send();
	}
}


function variable(id){
    // 2. Definimos el bloque que queremos que cambie
	divResultado = document.getElementById('sol');
	// 3. Inicializamos el objeto XHR
	ajax=objetoAjax();
	// 4. Especificamos la solicitud
	ajax.open('POST', 'selectuser.php', true);
	// 5. Configuramos el encabezado (POST)
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	// 6. Enviamos la solicitud
	ajax.send("id="+id)
	// 7. Definimos la función que se ejecutará cuando cambie la propiedad readyState
	ajax.onreadystatechange=function() {
	  	if (ajax.readyState==4) {
			// 8. Cambiamos el bloque del paso 2.
			divResultado.innerHTML = ajax.responseText
		}
	}
}

function variable(id){
    // 2. Definimos el bloque que queremos que cambie
	divResultado = document.getElementById('sol');
	// 3. Inicializamos el objeto XHR
	ajax=objetoAjax();
	// 4. Especificamos la solicitud
	ajax.open('POST', 'selectuser.php', true);
	// 5. Configuramos el encabezado (POST)
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	// 6. Enviamos la solicitud
	ajax.send("id="+id)
	// 7. Definimos la función que se ejecutará cuando cambie la propiedad readyState
	ajax.onreadystatechange=function() {
	  	if (ajax.readyState==4) {
			// 8. Cambiamos el bloque del paso 2.
			divResultado.innerHTML = ajax.responseText
		}
	}
}


function modificarFav(user,option){
	// 2. Definimos el bloque que queremos que cambie
	divResultado = document.getElementById('sol');
	// 3. Inicializamos el objeto XHR
	ajax=objetoAjax();
	// 4. Especificamos la solicitud
	ajax.open('POST', 'selectuser.php', true);
	// 5. Configuramos el encabezado (POST)
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	// 6. Enviamos la solicitud
	ajax.send("option="+option+"&id="+user)
	// 7. Definimos la función que se ejecutará cuando cambie la propiedad readyState
	ajax.onreadystatechange=function() {
	  	if (ajax.readyState==4) {
			// 8. Cambiamos el bloque del paso 2.
			divResultado.innerHTML = ajax.responseText
		}
	}
}


function maps(id){
    // 2. Definimos el bloque que queremos que cambie
	divResultado = document.getElementById('mapa');
	// 3. Inicializamos el objeto XHR
	ajax=objetoAjax();
	// 4. Especificamos la solicitud
	ajax.open('POST', 'mapeo.php', true);
	// 5. Configuramos el encabezado (POST)
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	// 6. Enviamos la solicitud
	ajax.send("id="+id)
	// 7. Definimos la función que se ejecutará cuando cambie la propiedad readyState
	ajax.onreadystatechange=function() {
	  	if (ajax.readyState==4) {
			// 8. Cambiamos el bloque del paso 2.
			divResultado.innerHTML = ajax.responseText
		}
	}
}



function consultar2(){
	divResultado = document.getElementById('resultado');
	contacto = document.getElementById('contacto').value;
	var ajax2=objetoAjax();
	ajax2.open("POST", "consulta.php", true);
	ajax2.onreadystatechange=function() {
		if (ajax2.readyState==4 && ajax2.status==200) {
			var respuesta2=JSON.parse(ajax2.responseText);
			var tabla =  '<table style="color:#000099;padding: 10px 18%;width:100%;"><tr style="background:#9BB;"><td># Pokédex</td><td>Nombre</td><td>Peso</td><td>Altura</td><td>Favorito</td></tr>';
			for(var i=0;i<respuesta2.length;i++) {
				tabla +='<tr><td><img src="./img/'+respuesta2[i].foto+'"></td>';
				tabla +='<td>'+respuesta2[i].nombre+'</td>';
				tabla +='<td>'+respuesta2[i].apellido+'</td>';
				tabla +='<td>'+respuesta2[i].email+'</td>';
				tabla +='<td>'+respuesta2[i].direccion1+'</td>';
				// if (respuesta2[i].favorito==1) {
				// 	tabla +='<td><a href="" ><img src="../img/pokemon.png" width="20px" height="20px"/></a></td>'
				// }else{
				// 	tabla +='<td><a href="" ><img src="../img/pokemon.png" width="20px" height="20px" style="opacity:0.4;/"></a></td>'
				// }
				tabla +='<td></td></tr>';
				/****************************************************************
				SEGUNDO PUNTO: Añadir a la tabla las columnas de peso y altura de 
				un pokémon.
				****************************************************************/
				/****************************************************************
				TERCER PUNTO: Añadir a la tabla la columna de pokémon favorito.
				Cuando el pokémon tenga el campo favorito con valor "0" la pokéball
				ha de verse opaca (usar la propiedad "opacity: 0.2;")
				Se ha de poder dar/quitar favorito a cada pokémon. Para ello ha de
				mostrarse un enlace en cada registro de la tabla.
				****************************************************************/
			}
			tabla+='</table>';
			divResultado.innerHTML=tabla;
		}
	}
	if(contacto!='' || contacto!=null){
		ajax2.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax2.send("q="+contacto)
	}else{
		ajax2.send();
	}
}

function modalcontacto() {
	var xmlhttp=false;
	try{
		xmlhttp = new ActiveXObject("Nsxm12.XMLHTTP");
	} catch (e) {
		try{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E){
			xmlhttp = false;
		}
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function enviarcontacto() {
	c=document.getElementById('contacto').value;
	ajax=objetoAjax();
	ajax.open("POST","contactonuevo.proc.php", true);
	ajax.onreadystatechange=function(){
		if (ajax.readyState==4) {
			document.getElementById('respuesta').innerHTML = ajax.responseText;
		}
	}
	ajax.setRequestHeader("Content-Text","application/x-www-form-urlencoded");
	ajax.send("contacto="+c);
}

function desplegar(valor){
	document.getElementById("bgventana").style.visibility=valor;
}
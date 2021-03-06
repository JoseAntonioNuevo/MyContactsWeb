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

/*Insertar registro en la base de datos*/
function registrar(){
	numero_pokedex = document.getElementById('numero_pokedex').value;
	nombre = document.getElementById('nombre').value;
	peso = document.getElementById('peso').value;
	altura = document.getElementById('altura').value;

	divResultado = document.getElementById('mensaje');
	ajax=objetoAjax();
	ajax.open("POST", "../services/registro.php", true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4 && ajax.status==200) {
	  		respuesta=eval("("+ajax.responseText+")");
	  		if(respuesta.resultado=="OK") {
	  			divResultado.innerHTML = "Pokemon registrado."
	  		} else {
	  			console.log(respuesta);
	  			divResultado.innerHTML = "Ha habido un problema al insertar el pokemon, inténtalo de nuevo más tarde."
	  		}
	  		limpiar();
			/*Muestra registros de la base de datos*/
			consultar();
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("numero_pokedex="+numero_pokedex+"&nombre="+nombre+"&peso="+peso+"&altura="+altura)
}

/*Actualizar registro en la base de datos*/
function actualizar(num, fav){
	divResultado = document.getElementById('mensaje');
	ajax=objetoAjax();
	ajax.open("POST", "../services/actualiza.php", true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4 && ajax.status==200) {
	  		respuesta=eval("("+ajax.responseText+")");
	  		if(respuesta.resultado=="OK") {
	  			divResultado.innerHTML = "Actualización correcta."
	  		} else {
	  			console.log(respuesta);
	  			divResultado.innerHTML = "Ha habido un problema al actualizar el registro, inténtalo de nuevo más tarde."
	  		}
			/*Muestra registros de la base de datos*/
			consultar();
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("numero_pokedex="+num+"&favorito="+fav)
}

/*Muestra registros de la base de datos*/
function consultar(){
	divResultado = document.getElementById('resultado');
	pokemon = document.getElementById('pokemon').value;
	var ajax2=objetoAjax();
	ajax2.open("POST", "../services/consulta.php", true);
	ajax2.onreadystatechange=function() {
		if (ajax2.readyState==4 && ajax2.status==200) {
			var respuesta2=JSON.parse(this.responseText);
			var tabla =  '<table style="color:#000099;padding: 10px 20%;width:100%;"><tr style="background:#9BB;"><td># Pokédex</td><td>Nombre</td><td>Peso</td><td>Altura</td><td>Favorito</td></tr>';
			for(var i=0;i<respuesta2.length;i++) {
				tabla +='<tr><td>'+respuesta2[i].numero_pokedex+'</td>';
				tabla +='<td>'+respuesta2[i].nombre+'</td>';
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
				tabla +='<td>'+respuesta2[i].peso+'</td>';
				tabla +='<td>'+respuesta2[i].altura+'</td>';
				if(respuesta2[i].favorito==1){
					tabla +='<td><a href=# onclick="actualizar('+respuesta2[i].numero_pokedex+',0); return false"/><img src="../img/pokemon.png" style="width:15px;"/></td></tr>';
				}else{
					tabla +='<td><a href=# onclick="actualizar('+respuesta2[i].numero_pokedex+',1); return false"/><img src="../img/pokemon.png" style="width:15px; opacity: 0.2;"/></td></tr>';
				}
			}
			tabla+='</table>';
			divResultado.innerHTML=tabla;
		}
	}
	if(pokemon!='' || pokemon!=null){
		ajax2.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax2.send("q="+pokemon)
	}else{
		ajax2.send();
	}
}

function limpiar(){
	numero_pokedex = document.getElementById('numero_pokedex').value='';
	nombre = document.getElementById('nombre').value='';
	peso = document.getElementById('peso').value='';
	altura = document.getElementById('altura').value='';
}
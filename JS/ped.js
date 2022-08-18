function validar() {
	var p_nombre, s_nombre, p_apellido, s_apellido, direccion, correo, identidad, letras, telefono;
	alto = document.getElementById("alto").value;
	ancho = document.getElementById("ancho").value;
	cantidad = document.getElementById("cantidad").value;
	nombre = document.getElementById("nombre").value;
	apellido = document.getElementById("apellido").value;
	direccion = document.getElementById("direccion").value;
	identidad = document.getElementById("identidad").value;
	dir = document.getElementById("dir").value;
	telefono = document.getElementById("telefono").value;

	letras = /^[A-Z]+$/i
	if (isNaN(alto)){
		alert("La altura solo puede contener numeros");
		return false;
	}
	if (isNaN(ancho)){
		alert("El ancho solo puede contener numero");
		return false; 
	}
	if (isNaN(cantidad)){
		alert("La cantidad solo puede contener numero");
		return false; 
	}
	if (!letras.test(nombre)){
		alert("El nombre solo debe contener letras");
		return false;
	}
	if (!letras.test(apellido)){
		alert("El apellido solo debe contener letras");
		return false;
	}
	if (isNaN(identidad)){
		alert("El numero de identidad solo puede contener numeros");
		return false;
	}
	if (isNaN(direccion)){
		alert("La dirección solo debe contener letras");
		return false;
	}
	if (isNaN(dir)){
		alert("La dirección solo debe contener letras");
		return false;
	}
	if (identidad.length != 13){
		alert("El numero de identidad es incorrecto debe tener una longitud de 13 numeros")
		return false;
	}	
	if (isNaN(telefono)){
		alert("El telefono solo debe contener numeros");
		return false; 
	}
	if (telefono.length != 8){
		alert("El telefono es incorrecto")
		return false;
	}
}
function validar() {
	var p_nombre, s_nombre, p_apellido, s_apellido, direccion, correo, identidad, letras, telefono;
	p_nombre = document.getElementById("p_nombre").value;
	s_nombre = document.getElementById("s_nombre").value;
	p_apellido = document.getElementById("p_apellido").value;
	s_apellido = document.getElementById("s_apellido").value;
	direccion = document.getElementById("direccion").value;
	correo = document.getElementById("correo").value;
	identidad = document.getElementById("identidad").value;
	telefono = document.getElementById("telefono").value;
	letras = /^[A-Z]+$/i

	if (!letras.test(p_nombre)){
		alert("El primer nombre solo debe contener letras");
		return false;
	}
	if (!letras.test(s_nombre)){
		alert("El segundo nombre solo debe contener letras");
		return false;
	}
	if (!letras.test(p_apellido)){
		alert("El primer apellido solo debe contener letras");
		return false;
	}
	if (!letras.test(s_apellido)){
		alert("El segundo apellido solo debe contener letras");
		return false;
	}
	if (isNaN(identidad)){
		alert("El numero de identidad solo puede contener numeros");
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
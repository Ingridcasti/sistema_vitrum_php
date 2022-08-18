function validar() {
	var p_nombre, s_nombre, p_apellido, s_apellido, direccion, correo, identidad, letras, telefono;
	alto = document.getElementById("alto").value;
	ancho = document.getElementById("ancho").value;
	cantidad = document.getElementById("cantidad").value;
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

}
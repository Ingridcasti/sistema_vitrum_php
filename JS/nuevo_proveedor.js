function validarnp() {
	var nombre_provee, correo_provee, telefono_provee, dir_provee, descri_provee;
	nombre_provee = document.getElementById("nombre_provee").value;
	correo_provee = document.getElementById("correo_provee").value;
	telefono_provee = document.getElementById("telefono_provee").value;
	dir_provee = document.getElementById("dir_provee").value;
	descri_provee = document.getElementById("descri_provee").value;
	letrasye = /^[a-zA-Z\s]*$/;
	letras = /^[A-Z]+$/i;


	if (!letrasye.test(nombre_provee)){
		alert("El nombre del proveedor solo puede contener letras");
		return false;
	}
	if (isNaN(telefono_provee)){
		alert("El número de teléfono solo puede contener números");
		return false;
	}
	if (telefono_provee.length!=8){
		alert("El número de teléfono que ingresó es incorrecto");
		return false;
	}
	if (!letrasye.test(descri_provee)){
		alert("La descripción solo puede contener letras");
		return false;
	}
}
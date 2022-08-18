function validarmp() {
	var Nombr, descprov, DIRpro, telefonoP, correo;
	Nombr = document.getElementById("Nombr").value;
	descprov = document.getElementById("descprov").value;
	DIRpro = document.getElementById("DIRpro").value;
	telefonoP = document.getElementById("telefonoP").value;
	correo = document.getElementById("correo").value;
	letrasye = /^[a-zA-Z\s]*$/;
	letras = /^[A-Z]+$/i;


	if (!letrasye.test(Nombr)){
		alert("El nombre del proveedor solo puede contener letras");
		return false;
	}
	if (!letrasye.test(descprov)){
		alert("La descripción solo puede contener letras");
		return false;
	}
	if (isNaN(telefonoP)){
		alert("El número de teléfono solo puede contener números");
		return false;
	}
	if (telefonoP.length!=8){
		alert("El número de teléfono que ingresó es incorrecto");
		return false;
	}
}
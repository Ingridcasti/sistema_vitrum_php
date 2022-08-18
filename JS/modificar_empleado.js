function validarmemp() {
	var telefono_emp, dir_emp;
	telefono_emp = document.getElementById("telefono_emp").value;
	dir_emp = document.getElementById("dir_emp").value;
	letrasye = /^[a-zA-Z\s]*$/;
	letras = /^[A-Z]+$/i;


	if (isNaN(telefono_emp)){
		alert("El número de teléfono solo puede contener números");
		return false;
	}
	if (telefono_emp.length!=8){
		alert("El número de teléfono es incorrecto");
		return false;
	}
}

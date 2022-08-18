function comprobarclave(){ 
	var n_contra, confirmar, espacio, correo, caracontra;
   	n_contra = document.getElementById("n_contra").value;
   	confirmar = document.getElementById("confirmar").value;
   	espacio = /\s/
   	caracontra = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{6,15}$/


   	if (n_contra != confirmar) {
      	alert("Las claves no son iguales"); 
      	return false;
   	}
  			
  	else if (espacio.test(n_contra)){
   		alert("La contraseña no puede contener espacios");
   		return false;
   	}

   	else if (!caracontra.test(n_contra)){
   		alert("La contraseña debe tener entre 6 a 15 caracteres y contener al menos una mayuscula y un numero");
   		return false;
   	}
} 
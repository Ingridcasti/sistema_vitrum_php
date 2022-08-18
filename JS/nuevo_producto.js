function validarnprod() {
	var nombre_pro, precio_pro, descrip_pro;
	nombre_pro = document.getElementById("nombre_pro").value;
	precio_pro = document.getElementById("precio_pro").value;
	descrip_pro = document.getElementById("descrip_pro").value;
	letrasye = /^[a-zA-Z\s]*$/;
	letras = /^[A-Z]+$/i;


	if (!letrasye.test(nombre_pro)){
		alert("El nombre del producto solo puede contener letras");
		return false;
	}
	if (!letrasye.test(descrip_pro)){
		alert("La descripción solo puede contener letras");
		return false;
	}
	if (isNaN(precio_pro)){
		alert("El precio solo puede contener números");
		return false;
	}
}
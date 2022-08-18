function validarmprod() {
	var nom_pro, pre_pro, des_prod;
	nom_pro = document.getElementById("nom_pro").value;
	pre_pro = document.getElementById("pre_pro").value;
	des_prod = document.getElementById("des_prod").value;
	letrasye = /^[a-zA-Z\s]*$/;
	letras = /^[A-Z]+$/i;


	if (!letrasye.test(nom_pro)){
		alert("El nombre del producto solo puede contener letras");
		return false;
	}
	if (isNaN(pre_pro)){
	alert("El precio solo puede contener números");
	return false;
	}
	if (!letrasye.test(des_prod)){
		alert("La descripción solo puede contener letras");
		return false;
	}
}

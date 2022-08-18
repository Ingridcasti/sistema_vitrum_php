function validarmm() {
	var des_ma, p_bn, p_m, p_e;
	des_ma = document.getElementById("des_ma").value;
	p_bn = document.getElementById("p_bn").value;
	p_m = document.getElementById("p_m").value;
	p_e = document.getElementById("p_e").value;
	letrasye = /^[a-zA-Z\s]*$/;


	if (!letrasye.test(des_ma)){
		alert("La decripción solo puede contener letras");
		return false;
	}
	if (isNaN(p_bn)){
		alert("Los precios solo puede contener numeros");
		return false;
	}
		if (isNaN(p_m)){
		alert("Los precios solo puede contener numeros");
		return false;
	}
		if (isNaN(p_e)){
		alert("Los precios solo puede contener numeros");
		return false;
	}
}
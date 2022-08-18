function validarnm() {
	var cod_ma, desc_ma, tipo_ma, p_b_n, p_ma, p_es;
	cod_ma = document.getElementById("cod_ma").value;
	desc_ma = document.getElementById("desc_ma").value;
	tipo_ma = document.getElementById("tipo_ma").value;
	p_b_n = document.getElementById("p_b_n").value;
	p_ma = document.getElementById("p_ma").value;
	p_es = document.getElementById("p_es").value;
	letras = /^[A-Z]+$/i;


	if (cod_ma.length!=5){
		alert("El código solo es de 5 caracteres");
		return false;
	}
	if (!letras.test(tipo_ma)){
		alert("El tipo de material solo puede contener letras");
		return false;
	}
	if (isNaN(p_b_n)){
		alert("Los precios solo puede contener numeros");
		return false;
	}
		if (isNaN(p_ma)){
		alert("Los precios solo puede contener numeros");
		return false;
	}
		if (isNaN(p_es)){
		alert("Los precios solo puede contener numeros");
		return false;
	}
}
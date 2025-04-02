let angulo = 300;
var arrCirculos = {
	"ciruloBackend": {
		numCirculos: 5
	},
	"circuloFronted": {
		numCirculos: 8
	},
	"circuloDDBB": {
		numCirculos: 7
	}
};

for (let nombreCirculo in arrCirculos) {
	const cirulos = document.querySelectorAll("." + nombreCirculo + " .circulo");
	arrCirculos[nombreCirculo].originX = cirulos[0].offsetLeft;
	arrCirculos[nombreCirculo].originY = cirulos[0].offsetTop;
}

function colorcarCirculos (radio) {
	for (let nombreCirculo in arrCirculos) {
		const cirulos = document.querySelectorAll("." + nombreCirculo + " .circulo");
		cirulos.forEach((element,i) => {
			element.style.left = `${
				arrCirculos[nombreCirculo].originX +
				radio*Math.cos(angulo + 2*Math.PI/arrCirculos[nombreCirculo].numCirculos*i)}px`;
				element.style.top = `${
					arrCirculos[nombreCirculo].originY +
					radio*Math.sin(angulo + 2*Math.PI/arrCirculos[nombreCirculo].numCirculos*i)}px`;
				});
	}
}

function setRadioCirculos(windowWidth){
	if(windowWidth > 800){
		colorcarCirculos(170);
	}else if(windowWidth > 600){
		colorcarCirculos(150);
	}else if(windowWidth > 500){
		colorcarCirculos(160);
	}else if(windowWidth > 400){
		colorcarCirculos(140);
	}else {
		colorcarCirculos(110);
	}
}
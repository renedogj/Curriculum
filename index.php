<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Javier Renedo</title>
	<meta name=author content="Javier Renedo">

	<!-- <meta http-equiv="refresh" content="1"> -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/timeline.css">
	<link rel="stylesheet" type="text/css" href="css/tecnologiaYCertificaciones.css">
	<link rel="stylesheet" type="text/css" href="css/proyectos.css">
</head>
<body>
	<section class="div-inicio">
		<h1 class="h1-inicioNombre" id="h1-InicioNombre"></h1>
		<!--<div class="div-inicioFoto"></div>-->
	</section>
	<?php
	include "controllers/timeline.html";
	include "controllers/tecnologias.html";
	include "controllers/certificaciones.html";
	include "controllers/proyectos.html";
	?>
	
	<section class="extra">

	</section>
	<script type="text/javascript">
		var i = 0;
		var txt = "Javier Renedo";

		function typeWriter() {
			if (i < txt.length) {
				$("#h1-InicioNombre").text($("#h1-InicioNombre").text() + txt.charAt(i));
				i++;
				setTimeout(typeWriter, 60);
			}
		}

		$(document).ready(() => {
			typeWriter();
		});

		let angulo = 300;
		var arrCirculos = {"ciruloBackend": 5, "circuloFronted": 8, "circuloDDBB": 6 };

		for (let nombreCirculo in arrCirculos) {
			const circles = document.querySelectorAll("." + nombreCirculo + " .circulo");
			colocarDivCirculo(circles, arrCirculos[nombreCirculo], 175);
		}

		function colocarDivCirculo(cirulos, numCirculos, radio) {
			let originX = cirulos[0].offsetLeft;
			let originY = cirulos[0].offsetTop;
			cirulos.forEach((element,i) => {
				element.style.left = `${originX + radio*Math.cos(angulo + 2*Math.PI/numCirculos*i)}px`;
				element.style.top = `${originY + radio*Math.sin(angulo + 2*Math.PI/numCirculos*i)}px`;
			});
		}
	</script>
</body>
</html>
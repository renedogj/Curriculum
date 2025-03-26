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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/timeline.css">
	<link rel="stylesheet" type="text/css" href="css/tecnologiaYCertificaciones.css">
	<link rel="stylesheet" type="text/css" href="css/proyectos.css">
	<link rel="stylesheet" type="text/css" href="css/contactame.css">

</head>
<body>
	<div id="particles-js" class="divBackgroundParticles"></div>
	<section class="div-inicio">
		<div class="divContenedoInicio">
			<h1 class="h1-inicioNombre" id="h1-InicioNombre"></h1>
			<h3 class="h3-inicio">Desarrollador FullStack - Experto en Ciberseguridad</h3>
			<div class="div-inicio-RRSS">
				<a 
					href="https://www.linkedin.com/in/javierrenedogonzalez/" title="Linkedin" target="_blank">
					<i class="fa fa-linkedin" aria-hidden="true"></i>
				</a>
				<a href="https://github.com/renedogj" title="Github" target="_blank">
					<i class="fa fa-github" aria-hidden="true"></i>
				</a>
				<a href="files/cv_Javier_Renedo.pdf" class="pdfcv" title="Curriculum" target="_blank">
					<i class="fa" aria-hidden="true">CV</i>
				</a>
			</div>
		</div>
	</section>
	<?php
	include "views/timeline.html";
	include "views/certificaciones.html";
	include "views/tecnologias.html";
	// include "views/proyectos.html";
	include "views/contactame.html";
	?>
	
	<!-- <section class="extra"></section> -->

	<script src="libs/particles.js"></script>
	<script type="text/javascript">
		particlesJS.load("particles-js", "libs/particles.json", function() {
			console.log("particles.js loaded - callback");
		});

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
		var arrCirculos = {"ciruloBackend": 5, "circuloFronted": 8, "circuloDDBB": 7 };

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


		$("#formularioEnviarCorreo").submit(() => {
			if($("#formularioEnviarCorreo").valid()){
				var datosCorreo = {};

				datosCorreo["nombre"] = $("#nombre").val();
				datosCorreo["empresa"] = $("#empresa").val();
				datosCorreo["email"] = $("#email").val();
				datosCorreo["mensaje"] = $("#mensaje").val();
				$.ajax({
					method: "POST",
					url: "models/enviarCorreo.php",
					data: datosCorreo,
					success: function(result){
						if(result == "true"){
							$("#modalEnviado").show();
							$("#formularioEnviarCorreo").trigger("reset");
						}else{
							$("#modalErrorEnviado").show();
						}
					},
					dataType: "text"
				});
			}
	return false;
})
	</script>
</body>
</html>
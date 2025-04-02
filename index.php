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
	<link rel="stylesheet" type="text/css" href="css/certificaciones.css">
	<link rel="stylesheet" type="text/css" href="css/proyectos.css">
	<link rel="stylesheet" type="text/css" href="css/contactame.css">

</head>
<body>
	<div id="particles-js" class="divBackgroundParticles"></div>
	<section class="div-inicio">
		<div class="divContenedoInicio">
			<h1 class="h1-inicioNombre" id="h1-InicioNombre"></h1>
			<h3 class="h3-inicio h3-inicio-ordenador">Desarrollador FullStack - Experto en Ciberseguridad</h3>
			<h3 class="h3-inicio h3-inicio-movil">Desarrollador FullStack <br/> Experto en Ciberseguridad</h3>
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
	// include "views/contactame.html";
	?>

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
			if($(window).width() > 800){
				colorcarCirculos(170);
			}else if($(window).width() > 600){
				colorcarCirculos(150);
			}else if($(window).width() > 500){
				colorcarCirculos(160);
			}else if($(window).width() > 400){
				colorcarCirculos(140);
			}else {
				colorcarCirculos(110);
			}
		});


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

		$(window).resize(() => {
			if($(window).width() > 800){
				colorcarCirculos(170);
			}else if($(window).width() > 600){
				colorcarCirculos(150);
			}else if($(window).width() > 500){
				colorcarCirculos(160);
			}else if($(window).width() > 400){
				colorcarCirculos(140);
			}else {
				colorcarCirculos(110);
			}
		});


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
							alert("Correo enviado con éxito");
							$("#formularioEnviarCorreo").trigger("reset");
						}else{
							alert("Se ha producido un error al enviar el correo");
						}
					},
					dataType: "text"
				});
			}
			return false;
		});

		$(document).ready(() => {
			$("#formularioEnviarCorreo").validate({
				rules:{
					nombre:{
						required: true,
						minlength: 3
					},
					apellido:{
						required: true,
						minlength: 3
					},
					email:{
						required: true,
						email: true
					},
					mensaje:{
						required: true,
					}
				},
				messages:{
					nombre:{
						required: "Es necesario rellenar este campo.",
						minlength: "Por favor introduce al menos 3 caracteres.",
					},
					apellido:{
						required: "Es necesario rellenar este campo.",
						minlength: "Por favor introduce al menos 3 caracteres.",
					},
					email:{
						required: "Es necesario rellenar este campo.",
						email: "Por favor introduce una dirección de correo valida.",
					},
					mensaje:{
						required: "Es necesario rellenar este campo.",
					}			
				}
			});
		});
	</script>
</body>
</html>
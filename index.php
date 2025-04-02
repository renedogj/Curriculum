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
	include "views/contactame.html";
	?>

	<script src="libs/particles.js"></script>
	<script src="controllers/index.js"></script>
	<script src="controllers/circulos.js"></script>
	<script src="controllers/correos.js"></script>
</body>
</html>
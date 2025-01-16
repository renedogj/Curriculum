<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Javier Renedo</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/timeline.css">
</head>
<body>
	<div class="div-inicio">
		<h1 class="h1-inicioNombre" id="h1-InicioNombre"></h1>
		<!--<div class="div-inicioFoto"></div>-->
	</div>
	<!-- <div class="div-skills"> -->
		<!-- <h1 class="h1-tituloSkills">Mis skills</h1>
		<div class="div-contenerdor-skill">
			<h1>Java</h1>
		</div>
		<div class="div-contenerdor-skill">
			<h1>HTML y CSS</h1>
		</div>
		<div class="div-contenerdor-skill">
			<h1>JavaScript</h1>
		</div>
		<div class="div-contenerdor-skill">
			<h1>PHP</h1>
		</div>
		<div class="div-contenerdor-skill">
			<h1>SQL y PL_SQL</h1>
		</div> -->
		<div class="timeline">
			<div class="experiencia">
				<div class="container experiencia-2">
					<div class="content">
						<h3>Desarrollador de software</h3>
						<h4>Saints</h4>
						<p class="periodo">Agosto de 2024 - Actualidad (6 meses)</p>
						<ul class="ulDescripcion">
							<li>Desarrollo de aplicaciones IOS y Android usando Ionic con Vue.js</li>
							<li>Gestion de archivos JSON y bases de datos no relacionales con python</li>
						</ul>
					</div>
				</div>
				<div class="container experiencia-1">
					<div class="content">
						<h3>Consultor técnico en el Departamento de SAP</h3>
						<h4>NTT-Data</h4>
						<p class="periodo">septiembre de 2023 - octubre de 2023 (2 años)</p>
						<ul class="ulDescripcion">
							<li>Creación y desarrollo Frontend de aplicaciones conectándolas con aplicaciones Backend (desarrolladas con SAP CAP) utilizando SAP UI5</li>
							<li>Creación y desarrollo Backend de aplicaciones, haciendo consultas a bases de datos y administrando las mismas utilizando SAP CAP</li>

							<li>Planificación y estimación del desarrollo de las distintas tareas</li>

							<li>Localizar y solucionar con éxito errores encontrados en distintos algoritmos</li>

							<li>Presentar y exponer el avance en las distintas aplicaciones explicando su funcionamiento y como se han realizado, así como creación de material audiovisual como apoyo de la presentación.</li>

							<li>Realización de documentación de proyectos y realización y ejecución de planes de pruebas</li>
						<ul>
					</div>
				</div>
				<div class="experiencia--1"></div>
			</div>
			<div class="formacion">
				<!-- <div class="formacion-0"></div> -->
				<div class="container formacion-4">
					<div class="content">
						<h3>Grado en Ciberseguridad</h3>
						<h4>Universidad internacional de la Rioja (UNIR)</h4>
						<p class="periodo">septiembre 2024 – Actualidad</p>
					</div>
				</div>
				<div class="container formacion-3">
					<div class="content">
						<h3>Master en Ciberseguridad</h3>
						<h4>ENIIT – UCAM</h4>
						<p class="periodo">septiembre de 2023 - octubre de 2023 (2 años)</p>
						<!-- <a>Más información</a> -->
					</div>
				</div>
				<div class="formacion-25"></div>
				<div class="container  formacion-2">
					<div class="content">
						<h3>Técnico Superior de Desarrollo de Aplicaciones WEB</h3>
						<p class="periodo">junio de 2022</p>
						<!-- <a>Más información</a> -->
					</div>
				</div>
				<div class="container formacion-1">
					<div class="content">
						<h3>Técnico Superior de Desarrollo de Aplicaciones Multiplataforma</h3>
						<p class="periodo">junio de 2021</p>
						<!-- <a>Más información</a> -->
					</div>
				</div>
				<!-- <div class="formacion--1"></div> -->
			</div>
		</div>
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
		</script>
	</body>
	</html>
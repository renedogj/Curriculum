<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Javier Renedo</title>
	<meta name=author content="Javier Renedo">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/timeline.css">
	<link rel="stylesheet" type="text/css" href="css/lenguajes.css">
</head>
<body>
	<div class="div-inicio">
		<h1 class="h1-inicioNombre" id="h1-InicioNombre"></h1>
		<!--<div class="div-inicioFoto"></div>-->
	</div>
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
					</ul>
				</div>
			</div>
			<div class="experiencia--1"></div>
		</div>
		<div class="formacion">
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
				</div>
			</div>
			<div class="formacion-25"></div>
			<div class="container  formacion-2">
				<div class="content">
					<h3>Técnico Superior de Desarrollo de Aplicaciones WEB</h3>
					<p class="periodo">junio de 2022</p>
				</div>
			</div>
			<div class="container formacion-1">
				<div class="content">
					<h3>Técnico Superior de Desarrollo de Aplicaciones Multiplataforma</h3>
					<p class="periodo">junio de 2021</p>
				</div>
			</div>
		</div>
	</div>
	<div class="lenguajesTecnologias">
		<!-- <p>centro</p> -->
		<div class="cicurloGrandre ciruloBackend circuloLateral">
			<h5>Lenguajes generales y back-end</h5>
			<div class="circulo">
				<img src="img/logo_java.png"/>
			</div>
			<div class="circulo">
				<span>Python</span>
				<img src="img/logo_java.png"/>
			</div>
			<div class="circulo">
				<span>PHP</span>
				<img src="img/logo_java.png"/>
			</div>
			<div class="circulo">
				<span>Kotlin</span>
				<img src="img/logo_java.png"/>
			</div>
			<div class="circulo">
				<span>Nodejs</span>
				<img src="img/logo_java.png"/>
			</div>
		</div>
		<div class="cicurloGrandre circuloFronted">
			<h5>Lenguajes front-end</h5>
			<div class="circulo">
				<img src="img/logo_html.png"/>
				<span>HTML</span>
			</div>
			<div class="circulo">
				<span>CSS</span>
				<img src="img/logo_css.png"/>
			</div>
			<div class="circulo">
				<span>JavaScript</span>
				<img src="img/logo_JavaScript.png"/>
			</div>
			<div class="circulo">
				<span></span>
				<img src="img/logo_TypeScript.png"/>
			</div>
			<div class="circulo">
				<span></span>
				<img src="img/log_vue.js.png"/>
			</div>
			<div class="circulo">
				<span></span>
				<img src="img/logo_React.js.png"/>
			</div>
			<div class="circulo">
				<span></span>
				<img src="img/logo_jQuery.png"/>
			</div>
			<div class="circulo">
				<span></span>
				<img src="img/logo_bootstrap.png"/>
			</div>
		</div>
		<div class="cicurloGrandre circuloDDBB circuloLateral">
			<h5>Bases de datos y manejo de datos</h5>
			<div class="circulo">SQL</div>
			<div class="circulo">
				<span>PL</span>
			/SQL</div>
			<div class="circulo">
				<span>MongoDB</span>
				<img src="img/logo_java.png"/>
			</div>
			<div class="circulo">
				<span>Firebase</span>
				<img src="img/logo_java.png"/>
			</div>
			<div class="circulo">
				<span>JSON</span>
				<img src="img/logo_java.png"/>
			</div>
			<div class="circulo">
				<span>XML</span>
				<img src="img/logo_java.png"/>
			</div>
		</div>
	</div>
	<div class="extra">
		
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

		const n = 7;  // numero de circulos
		const r = 150; // radio

		let angulo = 0;
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
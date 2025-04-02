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
	setRadioCirculos($(window).width());
	$(window).resize(() => {
		setRadioCirculos($(window).width());
	});
});


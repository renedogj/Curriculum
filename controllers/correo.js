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
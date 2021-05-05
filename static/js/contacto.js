$(function() {
	console.log("Hola");
	$("#contactForm input,#contactForm textarea").jqBootstrapValidation({
		preventSubmit: true,

		submitError: function() {
			console.log("error");
		},

		submitSuccess: function($form, event) {
			event.preventDefault();

			var nombre = $("input#nombre").val();
			var mail = $("input#mail").val();
			var telefono = $("input#telefono").val();
			var mensaje = $("textarea#mensaje").val();

			var btn = $("#btnEnviarMensaje");
			btn.prop("disabled", true);

			$.post($form.attr("action"), $form.serialize())
				.done(function() {
					$('#contactStatus').html("<div class='alert alert-success'>");
					$('#contactStatus > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>")
					$('#contactStatus > .alert-success')
						.append("<strong>Su mensaje fue enviado. Le responderemos a la brevedad</strong>");
					$('#contactStatus > .alert-success').append('</div>');
					//clear all fields
					$('#contactForm').trigger("reset");
				})
				.fail(function() {
					$('#contactStatus').html("<div class='alert alert-danger'>");
					$('#contactStatus > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
					$('#contactStatus > .alert-danger')
						.append("<strong>No se pudo enviar el mensaje. Por favor intente nuevamente");
					$('#contactStatus > .alert-danger').append('</div>');
				})
				.always(function() {
					setTimeout(function() {
						btn.prop("disabled", false)
					}, 3000);
				});
		},
	});
});
<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha256-H3cjtrm/ztDeuhCN9I4yh4iN2Ybx/y1RM7rMmAesA0k=" crossorigin="anonymous"></script>

<script src="/static/js/agency.min.js"></script>

<script src="/static/vendor/bootstrap-validate/dist/bootstrap-validate.js"></script>
<script>
	bootstrapValidate("#nombre", "required:Por favor ingrese su nombre.");
	bootstrapValidate("#mail", "required:Por favor ingrese su mail.|email:Dirección de mail inválida.");

	function showModal(enviado) {
		// let modal = document.getElementById("resultado-mensaje");
		let icon, title, text;
		if (enviado) {
			icon = `<i class="far fa-check-circle text-success"></i>`;
			title = "Su mensaje fue enviado exitosamente";
			text = "Recibirá una respuesta a la brevedad";
		} else {
			icon = `<i class="far fa-times-circle text-danger"></i>`;
			title = "Hubo un error al enviar el mensaje";
			text = `Por favor, intente nuevamente. En caso de persistir el error envíe un mail a <a href="mailto:info@estiloñ.com.ar" title="info@estiloñ.com.ar">info@estiloñ.com.ar</a>`;
		}
		document.getElementById('modal-icon').innerHTML = icon;
		document.getElementById('modal-title').innerText = title;
		document.getElementById('modal-text').innerHTML = text;
		$('#resultado-mensaje').modal();
	}

	const handleSubmit = (e) => {
		e.preventDefault()
		let myForm = document.getElementById('contactForm');
		let formData = new FormData(myForm)
		fetch('/', {
			method: 'POST',
			headers: { "Content-Type": "application/x-www-form-urlencoded" },
			body: new URLSearchParams(formData).toString()
		}).then(() => showModal(true)).catch((error) =>
		showModal(false))
	}

	document.querySelector("#contactForm").addEventListener("submit", handleSubmit);

</script>
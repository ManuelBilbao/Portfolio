// <OPCIONES DE RECORTE Y ROTACION>
encuadre = document.getElementById('encuadre');
opcionesRecorte = document.getElementById('opcionesRecorte');
opcionesRotacion = document.getElementById('opcionesRotacion');

// Empiezan deshabilitados porque no hay imagen
encuadre.disabled = true;
opcionesRecorte.disabled = true;
opcionesRotacion.disabled = true;

// EventListeners
encuadre.addEventListener("change", cambiarOpcRecorte);
opcionesRecorte.addEventListener("change", encuadrePrev);
opcionesRotacion.addEventListener("change", rotacion);

function cambiarOpcRecorte() {
	if (encuadre.value == "recortar") {
		opcionesRecorte.disabled = false;
	} else if (encuadre.value == "redimensionar") {
		opcionesRecorte.disabled = true;
	};
	encuadrePrev();
}
// </OPCIONES DE RECORTE>


// <SELECCION DE ENTRADA>
function camara() {
	foto.setAttribute("capture", "camera");
	foto.click();
}

function archivo() {
	foto.removeAttribute("capture");
	foto.click();
}
// </SELECCION DE ENTRADA>


// <BARRA DE PROGRESO>
progreso = document.getElementById('progreso');
form = document.getElementById("form");

// Antes de enviar el formulario mostrar la barra de progreso
form.onsubmit = delayedSubmit;

function delayedSubmit () {
	progreso.style.display = "block";
    form.submit();
}
// </BARRA DE PROGRESO>


// <PREVISUALIZACION>
frase = document.getElementById('frase');
foto = document.getElementById('foto');
fuente = document.form.fuente;
color = document.getElementById('color');
imgPrev = document.getElementById('imgPrev');
textoPrev = document.getElementById('textoPrev');

// Mostrar el texto en la previsualización
frase.addEventListener('keyup', function () {
	textoPrev.innerText = frase.value;
	textoPrev.style.color = color.value;
});

// Para cada fuente:
for (var i = 0; i < fuente.length; i++) {
	//Añadir un EventListener para cuando cambien
	fuente[i].addEventListener("change", function () {
		// Si se activa sobre la chequeada
		if (this.checked) {
			nombreFuente = fuente.value.substring(0, fuente.value.length - 4);
			//Cambia la fuente y el tamaño
			textoPrev.style.fontFamily = nombreFuente;
			if (nombreFuente == "Script") {
				tamaño = 50;
			} else if (nombreFuente = "OLDENGL") {
				tamaño = 35;
			};
			textoPrev.style.fontSize = tamaño + "px";
		}
	});
};

// Cambiar el color del texto prev
color.addEventListener("change", function () {
	textoPrev.style.color = color.value;
});

// Muestra la imagen del input en el prev
function filePreview(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			imgPrev.style.backgroundImage = "url(" + e.target.result + ")";
			encuadrePrev();
		}
		reader.readAsDataURL(input.files[0]);
	}
}

// Obtener dimensiones del input file
function getDim(obj) {
	filePreview(obj);

	var uploadFile = obj.files[0];

	var img = new Image();
	img.onload = function () {
		modificarOpcRecorte(img.height, img.width);
	};
	img.src = URL.createObjectURL(uploadFile);
}

// Muestro la imagen cargada del link
function link() {
	imgPrev.style.backgroundImage = "url(" + url.value + ")";	

	var img = new Image();
	img.src = url.value;
	modificarOpcRecorte(img.height, img.width);
	
	encuadrePrev();
}

// Seteo si es vertical, horizontal o cuadrada
function modificarOpcRecorte(alto, ancho) {
	if (alto == ancho) {
		encuadre.disabled = true;
		opcionesRecorte.disabled = true;
		opcionesRecorte.innerHTML = "";
		return;
	} else {
		encuadre.disabled = false;
		opcionesRecorte.disabled = false;
	}
	opcionesRotacion.disabled = false;

	if (alto > ancho) {
		opcionesRecorte.innerHTML = '<option value="LT">Arriba</option>' +
									'<option value="LM">Medio</option>' +
									'<option value="LB">Abajo</option>';
	} else {
		opcionesRecorte.innerHTML = '<option value="LT">Izquierda</option>' +
									'<option value="MT">Centro</option>' +
									'<option value="RT">Derecha</option>';
	}
}

// Seteo el encuadre segun corresponda
function encuadrePrev () {
	if (encuadre.value == "recortar") {
		imgPrev.style.backgroundSize = "cover";
		posX = opcionesRecorte.value.substring(0, 1);
		posY = opcionesRecorte.value.substring(1, 2);
		if (posX == "L") {
			imgPrev.style.backgroundPositionX = "0";
		} else if (posX == "M") {
			imgPrev.style.backgroundPositionX = "50%";
		} else if (posX == "R") {
			imgPrev.style.backgroundPositionX = "100%";
		};
		if (posY == "T") {
			imgPrev.style.backgroundPositionY = "0";
		} else if (posY == "M") {
			imgPrev.style.backgroundPositionY = "50%";
		} else if (posY == "B") {
			imgPrev.style.backgroundPositionY = "100%";
		};
	} else if (encuadre.value == "redimensionar") {
		imgPrev.style.backgroundSize = "100% 100%";
	};
}

//Seteo la orientacion
function rotacion() {
	imgPrev.style.transform = "rotate(" + opcionesRotacion.value + "deg)";
	imgPrev.style.webkitTransform = "rotate(" + opcionesRotacion.value + "deg)";
	imgPrev.style.MozTransform = "rotate(" + opcionesRotacion.value + "deg)";
	imgPrev.style.msTransform = "rotate(" + opcionesRotacion.value + "deg)";
	imgPrev.style.OTransform = "rotate(" + opcionesRotacion.value + "deg)";
}
// </PREVISUALIZACION>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php require("./plantillas/head.php") ?>
	<!-- <link rel="stylesheet" href="/static/css/inicio.css"> -->
	<style>
		header p {
			font-family: Montserrat, sans-serif;
			font-size: 1.35em;
		}

		.card, .card img, header .card .card-wrapper {
			border: none;
			border-radius: 8px;
		}

		.card {
			/*box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);*/
			box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
		}

		.card img {
			/*border: 1px solid #DEDEDE33;*/
		}

		.txt-rotate > .wrap {
			border-right: 0.08em solid #666;
			animation-name:blink;
			animation-duration:0.75s;
			animation-iteration-count: infinite;
		}

		.bg-primary {
			background-color: var(--color-primario)!important;
			box-shadow: 0px 194px 47px -192px rgba(0,0,0,0.75) inset,
						0px -194px 47px -192px rgba(0,0,0,0.75) inset;
			-webkit-box-shadow: 0px 194px 47px -192px rgba(0,0,0,0.75) inset,
						0px -194px 47px -192px rgba(0,0,0,0.75) inset;
			-moz-box-shadow: 0px 194px 47px -192px rgba(0,0,0,0.75) inset,
						0px -194px 47px -192px rgba(0,0,0,0.75) inset;
		}

		@keyframes blink {
			0% {
				border-right: 0.08em solid #666
			}
			49% {
				border-right: 0.08em solid #666
			}
			50% {
				border-right: none;
			}
			100% {
				border-right: none;
			}
		}

		@media (max-width: 991.98px) {
			header p {
				text-align: justify;
			}
		}
	</style>
</head>
<body class="bg-light">
	<?php require("./plantillas/nav.php") ?>

	<header class="container my-5">
		<div class="row">
			<div class="col-12 col-lg-5 align-self-center mb-4 mb-lg-0">
				<!-- <h1></h1> -->
				<!-- <div class="output" id="output">
					<h1 class="cursor"></h1>
					<p></p>
				</div> -->
				<h1>Genere
				<span
					class="txt-rotate"
					data-period="2000"
					data-rotate='[ "más ventas", "nuevos clientes" ]'></span>
				con su página web.
				</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis debitis, ipsum quae maiores, quaerat, ipsam eaque ipsa</p>
				<a href="#" class="btn btn-primary px-5"><b>Contactanos</b></a>
			</div>
			<div class="col-12 col-lg-7 mt-5 mt-lg-0">
				<div class="ps-lg-4">
					<div class="card">
						<div class="card-body p-0">
							<!-- <div class="card-wrapper" style="width:100%;height:0; padding-top:61%; position:relative; background-color: #DEDEDE">
								<img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/landing/img/scr-img/dark-layout.jpg" style="position:absolute; top:0; left:0; width:100%;">
							</div> -->
							<img class="w-100" src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/landing/img/scr-img/dark-layout.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section class="py-5 mb-4 bg-primario text-secundario">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-5 align-self-center">
					<h2 class="display-6">E-commerce</h2>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt voluptates obcaecati laborum enim veritatis veniam, modi illo, sint expedita dicta, cupiditate saepe, vero autem eveniet harum perferendis nobis optio maxime.</p>
					<a href="#" class="btn btn-info px-5">Estoy interesado</a>
				</div>

				<div class="col-12 offset-lg-1 col-lg-6">
					<img src="/static/img/servicios/ecommerce/1.svg" alt="" class="w-100">
				</div>
			</div>			
		</div>
	</section>

	<section class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg align-self-center">
					<h2 class="display-6 text-center">
						<small>
							<span class="fa-stack">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-globe fa-stack-1x fa-inverse"></i>
							</span>
						</small>
						Velocidad
					</h2>
					<div class="row">
						<div class="col-12">
							<h4>
							</h4>
						</div>
					</div>
					<!-- <h4 class="rounded-circle p-2 bg-primario d-inline"><i class="fas fa-globe"></i></h4> -->
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis tenetur, accusantium mollitia dicta nisi quod odit doloremque, aliquid error at eos dignissimos iste? Totam quo, provident, ducimus rem officia aspernatur!</p>
				</div>
				<div class="col-12 col-lg-5">
					<img src="/static/img/movil.svg" alt="" class="w-100">
				</div>
				<div class="col-12 col-lg align-self-center">
					<h2 class="display-6">Seguridad</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quod, alias error a ullam dolores consectetur nostrum perspiciatis porro, architecto corporis labore libero corrupti voluptatum quas et deserunt, illo magnam.</p>
				</div>
			</div>
		</div>
	</section>

	<?php require("./plantillas/scripts.php") ?>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- <script>
		var content = 'Genere más ventas gracias a su página web';
		var ele = '<span>' + content.split('').join('</span><span>') + '</span>';

		$(ele).hide().appendTo('h1').each(function (i) {
			$(this).delay(100 * i).css({
				display: 'inline',
				opacity: 0
			}).animate({
				opacity: 1
			}, 100);
		});
	</script> -->
	<!-- <script>
		// values to keep track of the number of letters typed, which quote to use. etc. Don't change these values.
		var i = 0,
		a = 0,
		isBackspacing = false,
		isParagraph = false;

		// Typerwrite text content. Use a pipe to indicate the start of the second line "|".  
		var textArray = [
			"Genere mayores ventas con su página web.", 
			"Genere nuevos clientes con su página web.", 
		];

		// Speed (in milliseconds) of typing.
		var speedForward = 100, //Typing Speed
		speedWait = 1000, // Wait between typing and backspacing
		speedBetweenLines = 1000, //Wait between first and second lines
		speedBackspace = 100; //Backspace Speed

		//Run the loop
		typeWriter("output", textArray);

		function typeWriter(id, ar) {
		var element = $("#" + id),
		aString = ar[a],
		eHeader = element.children("h1"), //Header element
		eParagraph = element.children("p"); //Subheader element

		// Determine if animation should be typing or backspacing
		if (!isBackspacing) {

		// If full string hasn't yet been typed out, continue typing
		if (i < aString.length) {

		// If character about to be typed is a pipe, switch to second line and continue.
		if (aString.charAt(i) == "|") {
		isParagraph = true;
		eHeader.removeClass("cursor");
		eParagraph.addClass("cursor");
		i++;
		setTimeout(function(){ typeWriter(id, ar); }, speedBetweenLines);

		// If character isn't a pipe, continue typing.
		} else {
		// Type header or subheader depending on whether pipe has been detected
		if (!isParagraph) {
		eHeader.text(eHeader.text() + aString.charAt(i));
		} else {
		eParagraph.text(eParagraph.text() + aString.charAt(i));
		}
		i++;
		setTimeout(function(){ typeWriter(id, ar); }, speedForward);
		}

		// If full string has been typed, switch to backspace mode.
		} else if (i == aString.length) {

		isBackspacing = true;
		setTimeout(function(){ typeWriter(id, ar); }, speedWait);

		}

		// If backspacing is enabled
		} else {

		// If either the header or the paragraph still has text, continue backspacing
		if (eHeader.text().length > 0 || eParagraph.text().length > 0) {

		// If paragraph still has text, continue erasing, otherwise switch to the header.
		if (eParagraph.text().length > 0) {
		eParagraph.text(eParagraph.text().substring(0, eParagraph.text().length - 1));
		} else if (eHeader.text().length > 0) {
		eParagraph.removeClass("cursor");
		eHeader.addClass("cursor");
		eHeader.text(eHeader.text().substring(0, eHeader.text().length - 1));
		}
		setTimeout(function(){ typeWriter(id, ar); }, speedBackspace);

		// If neither head or paragraph still has text, switch to next quote in array and start typing.
		} else { 

		isBackspacing = false;
		i = 0;
		isParagraph = false;
		a = (a + 1) % ar.length; //Moves to next position in array, always looping back to 0
		setTimeout(function(){ typeWriter(id, ar); }, 50);

		}
		}
		}
	</script> -->
	<script>
		var TxtRotate = function(el, toRotate, period) {
			this.toRotate = toRotate;
			this.el = el;
			this.loopNum = 0;
			this.period = parseInt(period, 10) || 2000;
			this.txt = '';
			this.tick();
			this.isDeleting = false;
		};

		TxtRotate.prototype.tick = function() {
			var i = this.loopNum % this.toRotate.length;
			var fullTxt = this.toRotate[i];

			if (this.isDeleting) {
				this.txt = fullTxt.substring(0, this.txt.length - 1);
			} else {
				this.txt = fullTxt.substring(0, this.txt.length + 1);
			}

			this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

			var that = this;
			var delta = 150 - Math.random() * 100;

			if (this.isDeleting) { delta /= 1.5; }

			if (!this.isDeleting && this.txt === fullTxt) {
				delta = this.period;
				this.isDeleting = true;
			} else if (this.isDeleting && this.txt === '') {
				this.isDeleting = false;
				this.loopNum++;
				delta = 500;
			}

			setTimeout(function() {
				that.tick();
			}, delta);
		};

		window.onload = function() {
			var elements = document.getElementsByClassName('txt-rotate');
			for (var i=0; i<elements.length; i++) {
				var toRotate = elements[i].getAttribute('data-rotate');
				var period = elements[i].getAttribute('data-period');
				if (toRotate) {
					new TxtRotate(elements[i], JSON.parse(toRotate), period);
				}
			}
			// INJECT CSS
			// var css = document.createElement("style");
			// css.type = "text/css";
			// css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
			// document.body.appendChild(css);
		};
	</script>
</body>
</html>

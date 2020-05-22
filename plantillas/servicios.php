<!DOCTYPE html>
<html lang="es">

<head>
	<?php require("head.php") ?>
	<link rel="stylesheet" href="/static/css/servicios.css">
	<link rel="stylesheet" href="/static/css/carousel.css">
</head>
<body id="page-top">
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="/"><img src="/static/img/Logo-alt.svg" alt="Estilo ñ"></a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ml-auto">
					<li class="nav-item">
						<a href="/" class="nav-link">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#caracteristicas">Características</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#prestaciones">Prestaciones</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#precios">Precios</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header -->
	<header>
		<div class="header-bg" style="background-image: url('/static/img/servicios/<?php echo $header_background ?>');"></div>
		<h1 class="header-title"><?php echo $nombre ?></h1>
	</header>

	<section class="page-section" id="caracteristicas">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Características</h2>
				</div>
			</div>
			<div class="row mt-3 text-justify">
				<div class="col-12 col-md-10 col-lg-8 mx-auto">
					<p class="text-muted">
						<strong><em>Estilo ñ</em></strong> es un estudio de desarrollo web dispuesto a desafiarse en todo momento y elaborar proyectos que sobresalgan, ofreciendo soluciones personalizadas para las necesidades de todos los clientes.
						<br>
						Creemos que lo más importante para una empresa es la imagen y la seguridad que transmite a sus clientes y es por eso que nosotros nos enfocamos en los detalles para cubrir al máximo todos los aspectos de un sitio web.
					</p>
					<p class="text-muted">
						En <strong><em>Estilo ñ</em></strong> lo estaremos acompañando en todo el proceso de esta nueva etapa, desde el minuto cero aconsejándolo para que la transición hacia su nuevo sitio sea el ideal y libre de cualquier duda.
					</p>
					<p class="text-muted">
						Bienvenido a <strong><em>Estilo ñ</em></strong>, donde el verdadero cambio comienza y los sueños se hacen realidad.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="page-section bg-light" id="precios">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Precios</h2>
				</div>
			</div>

			<div class="row d-none d-lg-flex mt-3">
				<?php foreach ($precios as $precio): ?>
					<div class="col">
						<?php include("servicios/card-precios.php"); ?>
					</div>
				<?php endforeach ?>
			</div>

			<div class="row d-flex d-lg-none">
				<div class="col-12">
					<div class="mat-carousel">
						<?php foreach ($precios as $precio): ?>
							<div class="mat-carousel-item w-75">
								<?php include("servicios/card-precios.php"); ?>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php require("footer.php") ?>

	<?php require("scripts.php") ?>
	<script src="/static/js/global.js"></script>
	<script src="/static/js/component.js"></script>
	<script src="/static/js/cash.js"></script>
	<script src="/static/js/carousel.js"></script>
	<script>
		  $(document).ready(function(){
		    $('.mat-carousel').carousel({"noWrap": true});
		  });

		  var alto = $(".card-precios").last().height()
		  $(".mat-carousel").height(alto * 1.1);
	</script>
</body>
</html>
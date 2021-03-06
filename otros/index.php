<!DOCTYPE html>
<html lang="es">

<head>
	<?php require("../plantillas/head.php") ?>
	<link rel="stylesheet" href="/static/css/servicios.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.0/dist/aos.css">

	<style>
		@media (max-width: 991.98px) {
			.servicio {
				text-align: center;
			}
		}
	</style>
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
						<a href="#servicios" class="nav-link js-scroll-trigger">Servicios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#presupuesto">Presupuesto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header -->
	<header>
		<div class="header-bg" style="background-image: url('/static/img/servicios/presentacion/header.jpg');"></div>
		<h1 class="header-title">Otros servicios</h1>
	</header>

	<section class="page-section bg-white" id="servicios">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 mb-3">
					<div class="row">
						<div class="col-9 col-lg-4 mx-auto">
							<img src="/static/img/servicios/otros/correos.png" alt="Correos corporativos" class="w-100">
						</div>
						<div class="col-lg servicio">
							<h3 class="section-heading">Correos corporativos</h3>
							<p class="text-muted">De una imagen más profesional con su propio correo corporativo. <i>nombre@empresa.com</i></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 mb-3">
					<div class="row">
						<div class="col-9 col-lg-4 mx-auto">
							<img src="/static/img/servicios/otros/mantenimiento.png" alt="Mantenimiento" class="w-100">
						</div>
						<div class="col-lg servicio">
							<h3 class="section-heading">Mantenimiento</h3>
							<p class="text-muted">Mantenga siempre su sitio actualizado y defendido de las nuevas amenazas y vulnerabilidades que se presentan cada día.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 mb-3">
					<div class="row">
						<div class="col-9 col-lg-4 mx-auto">
							<img src="/static/img/servicios/otros/newsletter.png" alt="Newsletter" class="w-100">
						</div>
						<div class="col-lg servicio">
							<h3 class="section-heading">Newsletter</h3>
							<p class="text-muted">Envíe mails promocionales y con novedades para mantener a sus clientes cerca y generar mayores ingresos.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 mb-3">
					<div class="row">
						<div class="col-9 col-lg-4 mx-auto">
							<img src="/static/img/servicios/otros/renovacion.png" alt="Renovación" class="w-100">
						</div>
						<div class="col-lg servicio">
							<h3 class="section-heading">Renovación</h3>
							<p class="text-muted">Renueve su antiguo sitio y dele un estilo totalmente modernizado.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 mb-3">
					<div class="row">
						<div class="col-9 col-lg-4 mx-auto">
							<img src="/static/img/servicios/otros/idiomas.png" alt="Idiomas" class="w-100">
						</div>
						<div class="col-lg servicio">
							<h3 class="section-heading">Idiomas</h3>
							<p class="text-muted">Exapanda sus fronteras al máximo ofreciendo su sitio en diversos idiomas.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 mb-3">
					<div class="row">
						<div class="col-9 col-lg-4 mx-auto">
							<img src="/static/img/servicios/otros/mas.png" alt="Mucho más" class="w-100">
						</div>
						<div class="col-lg servicio">
							<h3 class="section-heading">Mucho más...</h3>
							<p class="text-muted">Le ofrecemos soluciones personalizadas exclusivamente para sus necesidades, no dude en consultarnos.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="page-section bg-light" id="contacto">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="section-heading text-center">Presupuesto</h2>
					<h5 class="text-muted font-weight-normal text-center">Solicite su presupuesto <strong class="body">SIN CARGO</strong></h5>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-12">
					<?php $servicio = "otros" ?>
					<?php require("../plantillas/contact_form.php") ?>
				</div>
			</div>
		</div>
	</section>

	<?php require("../plantillas/footer.php") ?>

	<?php require("../plantillas/scripts.php") ?>
	<script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
	<script>
		  AOS.init({
		  	offset: 0,
		  	duration: 900,
		  });
	</script>
</body>
</html>
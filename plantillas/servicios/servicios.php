<!DOCTYPE html>
<html lang="es">

<head>
	<?php require("../plantillas/servicios/head.php") ?>
	<link rel="stylesheet" href="/static/css/servicios.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
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
					<?php if (isset($caracteristicas)): ?>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#caracteristicas">Características</a>
						</li>
					<?php endif ?>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#presupuesto">Presupuesto</a>
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

	<?php if (isset($caracteristicas)): ?>
		<section class="page-section" id="caracteristicas">
		<?php foreach ($caracteristicas as $n => $caracteristica): ?>
			<?php $img_left = $n % 2 ?>

			<?php if ($n > 0): ?><hr class="w-50"><?php endif ?>
			<div data-aos="fade-up">
				<div class="container">
					<div class="row">
						<?php if ($img_left): ?>
							<div class="col-12 col-lg-6 order-12 align-self-center">
						<?php else: ?>
							<div class="col-12 col-lg-6 order-12 order-lg-1 align-self-center">
						<?php endif ?>
								<h2 class="section-heading"><?php echo $caracteristica["titulo"] ?></h2>
								<p class="text-muted"><?php echo $caracteristica["descripcion"] ?></p>
							</div>
						<?php if ($img_left): ?>
							<div class="col-12 col-lg-6 order-1 mb-4 mb-lg-0">
						<?php else: ?>
							<div class="col-12 col-lg-6 order-1 order-lg-12 mb-4 mb-lg-0 text-right">
						<?php endif ?>
								<img src="/static/img/servicios/<?php echo $caracteristica["imagen"] ?>" alt="<?php echo $caracteristica["titulo"] ?>" class="w-75">
							</div>
					</div>
				</div>
				</div>
		<?php endforeach ?>
		</section>
	<?php endif ?>

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
<!DOCTYPE html>
<html lang="es">

<head>
	<?php require("head.php") ?>
	<link rel="stylesheet" href="/static/css/servicios.css">
	<link rel="stylesheet" href="/static/css/carousel.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.0/dist/aos.css">

	<style>
		@media (max-width: 992px) {
			#caracteristicas,
			#caracteristicas div {
				text-align: center!important;
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
					<?php if (isset($caracteristicas)): ?>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#caracteristicas">Características</a>
						</li>
					<?php endif ?>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#prestaciones">Prestaciones</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#presupuesto">Presupuesto</a>
					</li>
					<?php if (isset($precios)): ?>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#precios">Precios</a>
						</li>
					<?php endif ?>
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

	<!-- <?php if (isset($precios)): ?>
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
	<?php endif ?> -->

	<section class="page-section bg-light" id="presupuesto">
		<div class="container">
			<div class="row text-center">
				<div class="col-12">
					<h2 class="section-heading">Presupuesto</h2>
					<button type="button" class="btn btn-xl btn-primary" data-toggle="modal" data-target=".modal">Solicite su presupuesto GRATIS</a>
				</div>
			</div>
		</div>
	</section>

	<div class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Solicite su presupuesto GRATIS</h5>
					<button class="close" tpye="button" data-dismiss="modal" aria-label="Cerrar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form name="presupuestoForm" netlify>
					<input type="hidden" class="hidden" name="servicio" value="<?php echo $nombre ?>">
					<div class="modal-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-lg">
									<div class="form-group">
										<label for="mail">Mail:</label>
										<input type="mail" class="form-control w-100" name="mail" id="mail" placeholder="juan@mail.com">
									</div>
								</div>
								<div class="col-auto">
									<label class="d-none d-lg-block">&nbsp;</label>
									<p>ó</p>
								</div>
								<div class="col-12 col-lg">
									<div class="form-group">
										<label for="telefono">Teléfono:</label>
										<input type="tel" class=" form-control w-100" name="telefono" id="telefono" placeholder="1123456789">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
						<button class="btn btn-primary" type="submit">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php require("footer.php") ?>

	<?php require("scripts.php") ?>
	<script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
	<script src="/static/js/global.js"></script>
	<script src="/static/js/component.js"></script>
	<script src="/static/js/cash.js"></script>
	<script src="/static/js/carousel.js"></script>
	<script>
		  AOS.init({
		  	offset: 0,
		  	duration: 900,
		  });

		  $(document).ready(function(){
		    $('.mat-carousel').carousel({"noWrap": true});
		  });

		  var alto = $(".card-precios").last().height()
		  $(".mat-carousel").height(alto * 1.1);
	</script>
</body>
</html>
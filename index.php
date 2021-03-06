<!DOCTYPE html>
<html lang="es">

<head>
	<?php require("./plantillas/head.php") ?>
	<link rel="stylesheet" href="/static/css/inicio.css">
</head>

<body id="page-top">
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="/static/img/Logo-alt.svg" alt="Estilo ñ"></a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#servicios">Servicios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#prestaciones">Prestaciones</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#nosotros">Nosotros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#contacto">Contacto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header -->
	<header class="masthead">
		<div class="container">
			<div class="intro-text">
				<!-- <div class="intro-lead-in">¡Bienvenido!</div> -->
				<div class="intro-heading text-uppercase">Estudio de diseño web</div>
				<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#servicios">Ver más</a>
			</div>
		</div>
	</header>

	<!-- Servicios -->
	<section class="page-section bg-light" id="servicios">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Servicios</h2>
					<h3 class="section-subheading text-muted"></h3>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-11 col-md-6 col-lg-4 mx-auto mt-4">
					<a href="/ecommerce/" class="text-body text-decoration-none">
						<div class="servicio">
							<h4 class="servicio-banner">Más vendido</h4>
							<div class="servicio-badge">
								<i class="fab fa-hotjar fa-inverse fa-3x"></i>
							</div>
							<!-- <span class="fa-stack fa-4x"> -->
								<!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> -->
								<i class="fas fa-shopping-cart fa-5x"></i>
							<!-- </span> -->
							<h4 class="service-heading">E-Commerce</h4>
							<p class="text-muted">Plataformas de ventas online con múltiples opciones que se acomodan a cualquier necesidad.</p>
						</div>
					</a>
				</div>
				<div class="col-11 col-md-6 col-lg-4 mx-auto mt-4">
					<a href="/presentacion/" class="text-body text-decoration-none">
						<div class="servicio">
							<!-- <span class="fa-stack fa-4x"> -->
								<!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> -->
								<i class="fas fa-user-tie fa-5x"></i>
							<!-- </span> -->
							<h4 class="service-heading">Presentación</h4>
							<p class="text-muted">Sitios de presentación para empresas e independientes que quieren agrandar su negocio.</p>
							<h4 class="servicio-caption">
								25% OFF
							</h4>
						</div>
					</a>
				</div>
				<div class="col-11 col-md-6 col-lg-4 mx-auto mt-4">
					<a href="/blog/" class="text-body text-decoration-none">
						<div class="servicio">
							<!-- <span class="fa-stack fa-4x"> -->
								<!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> -->
								<i class="far fa-newspaper fa-5x"></i>
							<!-- </span> -->
							<h4 class="service-heading">Noticias / Blogs</h4>
							<p class="text-muted">Sitios para noticias o blogs con el mejor y más sencillo editor de texto con un uso simple e intuitivo.</p>
							<h4 class="servicio-caption">
								<s>25% OFF</s>&nbsp; 50% OFF
							</h4>
						</div>
					</a>
				</div>
				<div class="col-11 col-md-6 col-lg-4 mx-auto mt-4">
					<a href="/turnos/" class="text-body text-decoration-none">
						<div class="servicio">
							<!-- <span class="fa-stack fa-4x"> -->
								<!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> -->
								<i class="far fa-calendar-check fa-5x"></i>
							<!-- </span> -->
							<h4 class="service-heading">Turnos</h4>
							<p class="text-muted">Sistema de turnos para consultorios, estudios y cualquier empresa que lo requiera.</p>
						</div>
					</a>
				</div>
				<div class="col-11 col-md-6 col-lg-4 mx-auto mt-4">
					<a href="/gestion/" class="text-body text-decoration-none">
						<div class="servicio">
							<!-- <span class="fa-stack fa-4x"> -->
								<!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> -->
								<i class="far fa-building fa-5x"></i>
							<!-- </span> -->
							<h4 class="service-heading">Empresas</h4>
							<p class="text-muted">Sistema de gestión personalizado para satisfacer las necesidades empresariales que se requieran.</p>
						</div>
					</a>
				</div>
				<div class="col-11 col-md-6 col-lg-4 mx-auto mt-4">
					<a href="/elearning/" class="text-body text-decoration-none">
						<div class="servicio">
							<!-- <span class="fa-stack fa-4x"> -->
								<!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> -->
								<i class="fas fa-graduation-cap fa-5x"></i>
							<!-- </span> -->
							<h4 class="service-heading">E-Learning</h4>
							<p class="text-muted">Plataformas de cursos online donde se pueden subir videos y textos con opción de suscripciones de pago.</p>
						</div>
					</a>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-auto m-auto text-center">
					<h4 class="section-subheading text-muted mb-3">¿No encontró lo que buscaba?</h4>
					<a href="/otros/" class="btn btn-xl btn-primary text-uppercase">Ver más opciones</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Prestaciones -->
	<section class="page-section bg-white" id="prestaciones">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2 class="section-heading text-uppercase">Prestaciones</h2>
				</div>
			</div>

			<div class="row text-center">
				<div class="col-md-6 col-lg-4 mt-2">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Diseño Responsive</h4>
					<p class="text-muted">Todos los sitios se adaptan a cualquier tamaño y tipo de pantalla. Incluso cuentan con soporte de accesibilidad para personas con discapacidad visual.</p>
				</div>
				<div class="col-md-6 col-lg-4 mt-2">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fab fa-google fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Google</h4>
					<p class="text-muted">Su negocio estará disponible en el mayor buscador de internet, con toda la información relevante para atraer a un mayor número de clientes.</p>
				</div>
				<!-- <div class="col-md-6 col-lg-4 mt-2">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Correos corporativos</h4>
					<p class="text-muted">Correos electrónicos personalizados para una mejor imagen corporativa. (tunombre@tuempresa.com)</p>
				</div> -->
				<div class="col-md-6 col-lg-4 mt-2">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-lock fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Seguridad</h4>
					<p class="text-muted">Encriptación SSL/HTTPS para que los sitios sean 100% seguros y confiables. Esencial para el manejo de datos sensibles.</p>
				</div>
				<!-- <div class="col-md-4 mt-2">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-life-ring fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Backups</h4>
					<p class="text-muted">Protección de tu sitio ante cualquier circunstancia con copias de seguridad semanales o diarias.</p>
				</div>
				<div class="col-md-4 mt-2">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-cogs fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Soporte técnico</h4>
					<p class="text-muted">Mantenimiento del sitio y resolución de problemas 24/7.</p>
				</div> -->
				<div class="col-md-6 col-lg-4 offset-lg-2 mt-2">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-map-marked-alt fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Mapa</h4>
					<p class="text-muted">Incluimos en su sitio un mapa interactivo con la dirección de su preferencia, para que los clientes puedan hallar su negocio más fácilmente.</p>
				</div>
				<div class="col-md-6 col-lg-4 mt-2">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-bolt fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Rapidez</h4>
					<p class="text-muted">Optimizamos al máximo los tiempos de carga de su sitio. ¿Sabía que el 50% de los usuarios se van antes de ver una página si demora demasiado en cargar?</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Portfolio -->
	<section class="bg-light page-section" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Portfolio</h2>
					<h3 class="section-subheading text-muted"></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="portfolio-item d-inline-block">
						<a class="portfolio-link" target="_blank" rel="noopener" href="https://nohuddle.com.ar/">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fas fa-plus fa-3x"></i>
								</div>
							</div>
							<img class="img-fluid" src="/static/img/portfolio/nohuddle.png" alt="">
							<div class="portfolio-caption text-body">
								<h4>No Huddle</h4>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="portfolio-item d-inline-block">
						<a class="portfolio-link" target="_blank" rel="noopener" href="https://vyaminsumosmedicos.com.ar/">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fas fa-plus fa-3x"></i>
								</div>
							</div>
							<img class="img-fluid" src="/static/img/portfolio/vyaminsumosmedicos.png" alt="">
							<div class="portfolio-caption text-body">
								<h4>Vyam Insumos Médicos</h4>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="portfolio-item d-inline-block">
						<a class="portfolio-link" target="_blank" rel="noopener" href="https://www.biancabilbao.com/">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fas fa-plus fa-3x"></i>
								</div>
							</div>
							<img class="img-fluid" src="/static/img/portfolio/biancabilbao.png" alt="">
							<div class="portfolio-caption text-body">
								<h4>Bianca Bilbao PH</h4>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Nosotros -->
	<section class="page-section bg-white" id="nosotros">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2 class="section-heading text-uppercase">Nosotros</h2>
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

			<!-- Staff -->
			<!-- <div class="row mt-5">
				<div class="col-lg-4">
					<div class="team-member">
						<img class="mx-auto rounded-circle" src="static/img/equipo/Manuel.jpg" alt="Foto de Manuel" />
						<h4>Manuel</h4>
						<p class="text-muted">Fundador<br>Programador Full Stack</p>
						<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
						<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
						<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="team-member">
						<img class="mx-auto rounded-circle" src="static/img/equipo/Florencia.jpg" alt="Foto de Florencia" />
						<h4>Florencia</h4>
						<p class="text-muted">Diseñadora<br>Relaciones Públicas</p>
						<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
						<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
						<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="team-member">
						<img class="mx-auto rounded-circle" src="static/img/equipo/Bianca.jpg" alt="Foto de Bianca" />
						<h4>Bianca</h4>
						<p class="text-muted">Productora Audiovisual<br>Fotógrafa profesional</p>
						<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
						<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
						<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
			</div> -->
		</div>
	</section>

	<!-- Equipo -->
	<!-- <section class="page-section bg-light" id="team">
		<div class="container">
			<div class="text-center">
				<h2 class="section-heading text-uppercase">Nuestro equipo</h2>
			</div>
			
		</div>
	</section> -->

	<!-- Contact -->
	<section class="page-section" id="contacto">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase mb-2">Contacto</h2>
					<h3 class="section-subheading text-white">
						<a href="mailto:manuel@bilbao.ar" class="text-decoration-none text-white">
							<i class="fas fa-envelope"></i>&nbsp; info@estiloñ.com.ar
						</a>
						<br class="d-block d-md-none">
						<span class="d-none d-md-inline px-3">&nbsp;</span>
						<a href="https://wa.me/541134049633" class="text-decoration-none text-white">
							<i class="fab fa-whatsapp"></i>&nbsp; 11 3404-9633
						</a>
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<?php $servicio = "inicio" ?>
					<?php require("./plantillas/contact_form.php") ?>
				</div>
			</div>
		</div>
	</section>

	<?php require("./plantillas/footer.php") ?>

	<?php require("./plantillas/scripts.php") ?>
</body>

</html>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Polaroid</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container principal">
			<div class="row">
				<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
<?php
	if (isset($_GET['id']) && $_GET['id'] != "") {
		$archivo = htmlentities(addslashes($_GET['id']));
		//Imprimo esto y continuo luego
?>
					<img src="../fotos/<?php echo $archivo; ?>" alt="Foto" class="foto-polaroid">
				</div>
			</div>
			<div class="row social">
				<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
					<h4>Compartir en...</h4>
					<a href="#"><img src="../img/wp.svg" alt="Compartir en WhatsApp" title="Compartir en WhatsApp"></a>
					<a href="#"><img src="../img/fb.svg" alt="Compartir en Facebook" title="Compartir en Facebook"></a>
					<a href="#"><img src="../img/tw.svg" alt="Compartir en Twitter" title="Compartir en Twitter"></a>
					<a href="#"><img src="../img/gp.svg" alt="Compartir en Google +" title="Compartir en Google +"></a>
					<a href="#"><img src="../img/tb.svg" alt="Compartir en Tumblr" title="Compartir en Tumblr"></a>
					<a href="#"><img src="../img/drive.svg" alt="Guardar en Google Drive" title="Guardar en Google Drive"></a>
					<a href="#"><img src="../img/db.svg" alt="Guardar en Dropbox" title="Guardar en Dropbox"></a>
					<a href="../fotos/<?php echo $archivo; ?>" target="_blank"><img src="../img/download.svg" alt="Descargar" title="Guardar en la PC"></a>
				</div>
			</div>
		</div>

<?php
	} else {
?>
	<div class="page-header">
	  <h1>Ops! <small>No encontramos la foto que estás buscando</small></h1>
	</div>
	<p class="error">Recordá que las fotos se borran después de 1 día.
	<br>Revisá que el ID sea el correcto, la URL tiene que ser así:
	<code>www.bilbao.com.ar/polaroid/foto/?id=<strong>TU_NUMERO_DE_ID</strong></code>
	</p>
<?php
	}
?>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>
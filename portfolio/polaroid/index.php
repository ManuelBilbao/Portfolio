<!-- Arreglar escritura: salto de linea y tildes -->
<!-- Revisar si la URL existe, sino avisar error y mantener lo anterior -->
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
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="panel panel-primary">
						<div class="panel-body">
							<form action="scripts/Foto.php" id="form" name="form" method="POST" role="form" enctype="multipart/form-data">
							<legend>Crear nueva imagen</legend>
								<div class="form-group">
									<label for="frase">Frase</label>
									<input type="text" class="form-control" id="frase" name="frase" placeholder="Opcional">
								</div>
							
								<!-- <div class="form-group">
									<label for="foto">Foto</label>
									<input type="file" id="foto" name="foto" accept="image/*" onchange="getDim(this);">
									<p class="help-block">ó</p>
									<input type="text" class="form-control" id="fotoURL" name="fotoURL" placeholder="Introduzca la URL de una imagen">
								</div> -->
								
								<div class="form-group">
									<label for="foto">Foto</label>
									<input type="file" class="hidden" id="foto" name="foto" accept="image/*" onchange="getDim(this)">
									<input type="text" class="hidden" id="source" name="source">
									<div class="row fotoRow">
										<div class="col-xs-4">
											<button type="button" class="btn btn-block btn-primary" onclick="camara();">
												<span class="glyphicon glyphicon-camera"></span>
											</button>
										</div>
										<div class="col-xs-4">
											<button type="button" class="btn btn-block btn-primary" onclick="archivo();">
												<span class="glyphicon glyphicon-picture"></span>
											</button>
										</div>
										<div class="col-xs-4">
											<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalURL">
												<span class="glyphicon glyphicon-link"></span>
											</button>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="encuadre">Encuadre</label>
									<select name="encuadre" id="encuadre" class="form-control">
										<option value="recortar">Recortar (mantiene proporción)</option>
										<option value="redimensionar">Redimensionar</option>
									</select>
								</div>

								<div class="form-group">
									<label for="opcionesRecorte">Opciones de recorte</label>
									<select name="opcionesRecorte" id="opcionesRecorte" class="form-control">
										
									</select>
								</div>

								<div class="form-group">
									<label for="opcionesRotacion">Opciones de rotación</label>
									<select name="opcionesRotacion" id="opcionesRotacion" class="form-control">
										<option value="0">No rotar</option>
										<option value="-90">90° Izquierda</option>
										<option value="180">180°</option>
										<option value="90">90° Derecha</option>
									</select>
								</div>

								<div class="form-group">
									<div class="radio row">
										<div class="col-xs-12 col-sm-6">
										<label id="fuente1">
											<input type="radio" name="fuente" value="Script.ttf" checked>
											Script
										</label>
											
										</div>
										<div class="col-xs-12 col-sm-6">
										<label id="fuente2">
											<input type="radio" name="fuente" value="OLDENGL.TTF">
											<p>
											Old English
											</p>
										</label>
											
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="color">Color</label>
									<input type="color" class="form-control" id="color" name="color">
								</div>
							
								<button type="submit" class="btn btn-primary" id ="enviar" name="enviar">Crear imagen</button>

								<div id="progreso">
									<b>Subiendo...</b>
									<div class="progress">
										<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="cuadroPrev">
						<div id="imgPrev">
						</div>
						<p id="textoPrev"></p>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="modalURL" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Introduzca la URL de la imagen</h4>
					</div>
					<div class="modal-body">
						<input type="text" class="form-control" id="url" placeholder="URL">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="link();">Aceptar</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<script src="js/scripts.js"></script>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>
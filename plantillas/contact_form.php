<form id="contactForm" method="POST" netlify>
	<input type="hidden" class="d-none" value="<?php echo $servicio ?>">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre *" required="required">
			</div>
			<div class="form-group">
				<input class="form-control" id="mail" name="mail" type="email" placeholder="Mail *" required="required">
			</div>
			<div class="form-group">
				<input class="form-control" id="telefono" name="telefono" type="tel" placeholder="Teléfono">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<textarea class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje"></textarea>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="col-lg-12 text-center">
			<div id="success"></div>
			<button id="btnEnviarMensaje" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar</button>
		</div>
	</div>
</form>

<div class="modal fade" id="resultado-mensaje" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body text-center">
				<div id="modal-icon">
				</div>
				<h4 id="modal-title"></h4>
				<p class="text-muted" id="modal-text"></p>
				<button class="btn mt-2" type="button" data-dismiss="modal">Volver</button>
			</div>
		</div>
	</div>
</div>
<div class="card card-precios">
	<div class="card-body text-center">
		<h4 class="card-title"><?php echo $precio["nombre"] ?></h4>
		<h4 class="card-title precio mt-3">
			<?php if ($precio["descuento"]): ?>
				<s class="text-muted text-nowrap">$<?php echo $precio["precio"] ?></s>
				&nbsp;<span class="text-nowrap text-<?php echo $precio["color"] ?>">$<?php echo $precio["descuento"] ?></span>
			<?php else: ?>
				<span class="text-nowrap text-<?php echo $precio["color"] ?>">$ <?php echo $precio["precio"] ?></span>
			<?php endif ?>
		</h4>
		<span class="d-block">Pago único y es tuya para siempre</span>

		<a href="#" class="btn btn-lg bg-<?php echo $precio["color"] ?> my-3">Contratar</a>

		<ul class="list-group list-group-flush text-left mx-0 mx-lg-3">
			<?php foreach ($precio["caracteristicas"] as $caracteristica): ?>
				<li class="list-group-item px-2">
					<div class="row">
						<div class="col">
							<?php echo $caracteristica["caracteristica"] ?></span>
						</div>
						<div class="col-auto">
							<i class="<?php echo $caracteristica["icono"] ?> text-<?php echo $precio["color"] ?>"></i>
						</div>
					</div>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
</div>
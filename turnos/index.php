<?php

$servicio = "turnos";
$nombre = "Turnos";
$header_background = "turnos/header.jpg";

$caracteristicas = [
	[
		"titulo" => "Productividad",
		"descripcion" => "Adquiera un sistema interno de turnos con el cual podrá organizar eficazmente sus horarios y los de su empresa, o bien brindarle a sus clientes la posibilidad de pedir sus propias citas a través de su sitio.",
		"imagen" => "turnos/1.png"
	], [
		"titulo" => "Servicios de salud",
		"descripcion" => "Escencial para centros de salud, consultorios médicos y terapéuticos que quieran sumar pacientes mediante la facilitación de los turnos vía web.",
		"imagen" => "turnos/2.png"
	], [
		"titulo" => "Centros deportivos",
		"descripcion" => "Un sistema ideal para reservar plazas, clases y canchas, con la posibilidad de suscripciones periódicas y opciones de pago por adelantado.",
		"imagen" => "turnos/3.png",
	]
];

require("../plantillas/servicios/servicios.php");

?>
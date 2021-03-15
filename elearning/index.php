<?php

$servicio = "elearning";
$nombre = "E-Learning";
$header_background = "elearning/header.jpg";

$caracteristicas = [
	[
		"titulo" => "Cursos online",
		"descripcion" => "Ofrezca y venda cursos con herramientas como textos, videos, evaluaciones y chats. Incluya certificados y recomendaciones inteligentes para atraer más clientes.",
		"imagen" => "elearning/1.png"
	], [
		"titulo" => "Capacitación empresarial",
		"descripcion" => "Obtenga una plataforma intuitiva y práctica para que sus empleados realicen las capacitaciones adecuadas a distancia sin dificultades, en donde pueda subir todo el contenido necesario para ellos.",
		"imagen" => "elearning/2.png"
	], [
		"titulo" => "Seguridad",
		"descripcion" => "El contenido siempre se encontrará protegido con los últimos estándares de seguridad para evitar la piratería y el robo de su propiedad intelectual.",
		"imagen" => "elearning/3.png",
	]
];

require("../plantillas/servicios/servicios.php");

?>
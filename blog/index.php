<?php

$servicio = "blog";
$nombre = "Noticias / Blogs";
$header_background = "blog/header.jpg";

$caracteristicas = [
	[
		"titulo" => "Más que un blog",
		"descripcion" => "Nada de plantillas viejas y aburridas, de las limitaciones y del famoso <i>*.blogspot.com</i>. Tenga un sitio que se adapte a su marca, con su propio nombre y estilo.",
		"imagen" => "blog/3.png"
	], [
		"titulo" => "Editor",
		"descripcion" => "Gracias al poderoso editor de texto, usted podrá aplicar el estilo que desee a sus artículos de forma muy sencilla e intuitiva, sin necesidad de conocimientos avanzados.",
		"imagen" => "blog/2.png"
	], [
		"titulo" => "Personalización",
		"descripcion" => "Diseñe el sitio a su gusto, ordene las secciones según le convenga y destaque los artículos más importantes.",
		"imagen" => "blog/1.png"
	]
];

require("../plantillas/servicios/servicios.php");

?>
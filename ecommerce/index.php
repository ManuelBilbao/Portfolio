<?php

$nombre = "E-Commerce";
$header_background = "ecommerce/header.jpg";

$caracteristicas_basicas = [
	[
		"icono" => "fas fa-layer-group",
		"caracteristica" => "Catálogo"
	], [
		"icono" => "fas fa-cogs",
		"caracteristica" => "Soporte técnico"
	]
];

$caracteristicas_premium = array_merge($caracteristicas_basicas, [
	[
		"icono" => "fas fa-shopping-cart",
		"caracteristica" => "Carro de compras"
	], [
		"icono" => "fas fa-money-bill",
		"caracteristica" => "Sistema de pagos",
	]
]);

$caracteristicas_empresariales = array_merge($caracteristicas_premium, [
	[
		"icono" => "fas fa-life-ring",
		"caracteristica" => "Backups",
	]
]);

$precios = [[
	"nombre" => "Básico",
	"precio" => "19.345",
	"color" => "amarillo",
	"caracteristicas" => $caracteristicas_basicas
], [
	"nombre" => "Premium",
	"precio" => "45.341",
	"descuento" => "25.021",
	"color" => "naranja",
	"caracteristicas" => $caracteristicas_premium,
], [
	"nombre" => "Empresarial",
	"precio" => "102.445",
	"descuento" => "60.000",
	"color" => "rojo",
	"caracteristicas" => $caracteristicas_empresariales,
]];

require("../plantillas/servicios.php");

?>
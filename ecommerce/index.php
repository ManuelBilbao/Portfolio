<?php

$nombre = "E-Commerce";
$header_background = "ecommerce/header.jpg";

$caracteristicas = [
	[
		"titulo" => "Ventas",
		"descripcion" => "Lleve su negocio al siguiente nivel implementando su propia tienda online, donde podrá vender todos sus productos y servicios.",
		"imagen" => "ecommerce/1.png"
	], [
		"titulo" => "Éxito",
		"descripcion" => "Trascienda las fronteras y expanda su negocio a nivel provincial, nacional e internacional. La tienda online no solo le permite mostrarle a sus potenciales clientes sus productos y servicios sino que les facilita la compra, facilitandole también al cliente la experiencia de compra.",
		"imagen" => "ecommerce/2.png"
	], [
		"titulo" => "Seguridad",
		"descripcion" => "Cumplimos con los últimos estándares de seguridad informatica, aportandole al dueño y al cliente una mayor tranquilidad en el circuito de pago y por tanto, confibialidad del sitio. Esto implica una mayor tasa de conversión de visitas a ventas.",
		"imagen" => "ecommerce/3.png"
	]
];

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

$precios = [
	[
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
	]
];

require("../plantillas/servicios.php");

?>
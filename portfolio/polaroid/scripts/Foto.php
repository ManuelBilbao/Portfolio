<?php
//
// 	TODO:
// 	- Agregar opciones de fuentes
// 	- Como borrar la foto? [BD con ID y hora, Nombre de la foto ID+Hora, cron]
//
	if (!isset($_POST['enviar'])) {
		header("location: ../");
	}

	use PHPImageWorkshop\ImageWorkshop;
	require_once('PHPImageWorkshop/ImageWorkshop.php');

	// Abro la imagen
	$source = htmlentities(addslashes($_POST['source']));
	if ($source == 0) {
		$foto = $_FILES['foto']['tmp_name'];
	} elseif ($source == 1) {
		$foto = htmlentities(addslashes($_POST['url']));
	} else {
		// Error
	}
	$img = ImageWorkshop::initFromPath($foto);


	//Abro la imagen
	/*$foto = $_FILES['foto'];
	$fotoURL = htmlentities(addslashes($_POST['fotoURL']));
	$ext = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
	$formatoValido = $ext == "jpg" || $ext == "png" || $ext == "gif" || $ext == "jpeg";
	if (isset($foto) && $foto['tmp_name'] != "" && $formatoValido) {
		$img = ImageWorkshop::initFromPath($foto['tmp_name']);
	} elseif (isset($fotoURL) && $fotoURL != "") {
		$img = ImageWorkshop::initFromPath($fotoURL);
	} else {
		$img = ImageWorkshop::initVirginLayer(200, 200, 'FFFFFF');
	}*/

	//Busco quien es menor (ancho o alto)
	$alto = $img->getHeight();
	$ancho = $img->getWidth();
	$menor = ($alto > $ancho) ? $ancho : $alto;
	
	//Se hace cuadrada
	$encuadre = htmlentities(addslashes($_POST['encuadre']));
	if ($encuadre == "redimensionar") {
		$img->resizeInPixel($menor, $menor, false);
	} else if ($encuadre == "recortar") {
		$img->cropInPixel($menor, $menor, 0, 0, htmlentities(addslashes($_POST['opcionesRecorte'])));
	}

	//La roto
	$rotacion = htmlentities(addslashes($_POST['opcionesRotacion']));
	$img->rotate($rotacion);

	//Seteo las dimensiones del fondo y la posicion de la imagen
	$anchoFondo = $menor * 1.1;
	$altoFondo = $menor * 1.35;
	$posicion = $menor * 0.05;

	//Creo el fondo y le añado la imagen
	$fondo = ImageWorkshop::initVirginLayer($anchoFondo, $altoFondo, "FFFFFF");
	$fondo->addLayerOnTop($img, $posicion, $posicion, "LT");

	$frase = htmlentities(addslashes($_POST['frase']));
	$color = htmlentities(addslashes($_POST['color']));
	$color = substr($color, 1);
	if(isset($frase) && $frase != "") {
		//Creo la capa de la frase
		$text = $frase;
		$fontPath = "../fonts/" . htmlentities(addslashes($_POST['fuente']));
		$fontSize = $menor * 0.13;
		$fontColor = $color;
		$textRotation = 0;

		$texto = ImageWorkshop::initTextLayer($text, $fontPath, $fontSize, $fontColor, $textRotation);

		//La añado al fondo
		$fondo->addLayerOnTop($texto, 0, $menor * 0.11, "MB");
	}

	// Añado el borde
	$borde = ImageWorkshop::initVirginLayer($anchoFondo + 2, $altoFondo + 2, "000000");
	$borde->addLayerOnTop($fondo, 1, 1, "LT");

	$archivo = time() . ".jpg";
	$borde->save("../fotos", $archivo, true, "FFFFFF", 100);
	
	echo "<script> window.open('../foto?id=" . $archivo . "', '_self'); </script>";
?>
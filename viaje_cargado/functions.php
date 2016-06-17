<?php 


// conectar con la base de datos//
function conexion($bd_config){
	try {
		$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass'], array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}

// limpia los datos//
function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}

//obtiene pagina actual//
function pagina_actual(){
	return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

//obtener cargas de base de datos en index//
function obtener_cargas ($post_por_pagina, $conexion){
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM publi_cargas ORDER BY fecha_publi DESC LIMIT $inicio, $post_por_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

//obtener camiones de base de datos en index//
function obtener_camiones ($post_por_pagina, $conexion){
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM publi_camion ORDER BY fecha_publi DESC LIMIT $inicio, $post_por_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

function numero_paginas ($post_por_pagina, $conexion){
	$total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_post->execute();
	$total_post = $total_post->fetch()['total'];

	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}

//id pagina camion_single//
function id_camion($id){
	return (int)limpiarDatos($id);
}

// obtiene camiones por id base de datos//
function obtener_camion_por_id($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM publi_camion WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

//id pagina camion_single//
function id_carga($id){
	return (int)limpiarDatos($id);
}

function obtener_carga_por_id($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM publi_cargas WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

//formato de fecha dd/mm/aa//
function fecha($fecha){
	$timestamp = strtotime($fecha);
	$dia = date('d', $timestamp); 
	$mes = date('m', $timestamp);
	$year = date('Y', $timestamp);

	$fecha = "$dia" . '/' . "$mes" . '/' . " $year";
	return $fecha;
}

//comprueba si hay sesion iniciada//
function comprobar_sesion(){
	if (!isset($_SESSION['usuario'])) {
	 	header('Location: ' . RUTA);
	 }
}


//saludo correspondiente a la hora
function buenosque($formulas) {
	date_default_timezone_set('America/Argentina/Buenos_Aires');
    $hora = date("H");
    
    foreach($formulas as $formula) {
        if($hora > $formula[0] && $hora < $formula[1]) return $formula[2];
    }
}

$formulas = array(
    array(-1, 7, "BUENAS NOCHES"),
    array(6, 15, "BUEN DIA"),
    array(14, 21, "BUENAS TARDES"),
    array(20, 24, "BUENAS NOCHES"));


//obtener datos del usuario//


?>
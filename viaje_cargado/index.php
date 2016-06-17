<?php session_start();

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

if (!$conexion) {
	header('Location: error.php');
}

$cargas = obtener_cargas($pg_config['cargas_por_pagina'], $conexion);
if (!$cargas) {
	header('Location: error.php');
}

$camiones = obtener_camiones($pg_config['camiones_por_pagina'], $conexion);
if (!$camiones) {
	header('Location: error.php');
}

require 'views/index.view.php';


?>
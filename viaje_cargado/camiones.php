<?php session_start();


require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

if (!$conexion) {
	header('Location: error.php');
}

$camiones = obtener_camiones($pg_config['lista_pag_camiones'], $conexion);
if (!$camiones) {
	header('Location: error.php');
}

require 'views/camiones.view.php';


?>
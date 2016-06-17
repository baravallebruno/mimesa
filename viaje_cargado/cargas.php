<?php session_start();


require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

if (!$conexion) {
	header('Location: error.php');
}

$cargas = obtener_cargas($pg_config['lista_pag_cargas'], $conexion);
if (!$cargas) {
	header('Location: error.php');
}


require 'views/cargas.view.php';

?>
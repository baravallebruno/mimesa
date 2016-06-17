<?php session_start();


require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
$id_camion = id_camion($_GET['id']);

if (!$conexion) {
	header('Location: error.php');
}

if (empty($id_camion)) {
	header('Location: index.php');
}

$post = obtener_camion_por_id($conexion, $id_camion);

if (!$post) {
	header('Location: index.php');
}

$post = $post[0];

require 'views/camiones_single.view.php';


?>
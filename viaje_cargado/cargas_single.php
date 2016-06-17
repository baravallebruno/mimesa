<?php session_start();


require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
$id_carga = id_carga($_GET['id']);

if (!$conexion) {
	header('Location: error.php');
}

if (empty($id_carga)) {
	header('Location: index.php');
}

$post = obtener_carga_por_id($conexion, $id_carga);

if (!$post) {
	header('Location: index.php');
}

$post = $post[0];

require 'views/cargas_single.view.php';


?>
<?php session_start();

require 'admin/config.php';
require 'functions.php';

if (isset($_SESSION['usuario'])) {
	header('Location: ' . RUTA);
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = limpiarDatos($_POST['usuario']);
	$password = $_POST['password'];
	$password = hash('sha512', $password);

	$conexion = conexion($bd_config);
	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password');
	$statement->execute(array(':usuario' => $usuario,':password' => $password));

	$resultado = $statement->fetch();



	if ($resultado !== false) {
		$_SESSION['usuario'] = $resultado;
		header('Location: ' . RUTA . 'admin');
	} else {
		$errores .= '<li>Datos incorrectos</li>';
	}
}

require 'views/login.view.php';

 ?>
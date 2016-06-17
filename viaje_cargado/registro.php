<?php session_start();

require 'functions.php';
require 'admin/config.php';

if (isset($_SESSION['usuario'])) {
	header('Location: ' . RUTA);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = limpiarDatos($_POST['usuario']);
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$si_camion = isset($_POST['si_camion']) ? $_POST['si_camion'] : 'no';
	$si_carga = isset($_POST['si_carga']) ? $_POST['si_carga'] : 'no';

	$errores = '';

	if (empty($usuario) or empty($email) or empty($password) or empty($password2)) {
		$errores .= '<li>Debes completar todos los campos</li>';
	} else {
		$conexion = conexion($bd_config);

		$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));
		$resultado = $statement->fetch();

		if ($resultado != false) {
			$errores .= '<li>El nombre de usuario ya existe</li>';
		}

		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);

		if ($password != $password2) {
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}
	}

	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO usuarios (id, usuario, email, pass, transportista, dador_cargas) VALUES (null, :usuario, :email, :password, :si_camion , :si_carga)');
		$statement->execute(array(
			':usuario' => $usuario,
			':email' => $email,
			':password' => $password,
			':si_camion' => $si_camion,
			':si_carga' => $si_carga
			));

			header('Location:login.php');
	}	
}

require 'views/registro.view.php';

 ?>
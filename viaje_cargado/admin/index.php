<?php session_start();
require '../admin/config.php';
require '../functions.php';

comprobar_sesion();

$conexion = conexion($bd_config);

if (!$conexion) {
	header('Location: error.php');
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = limpiarDatos($_POST['usuario']);
	$email = limpiarDatos($_POST['email']);
	$nombre = limpiarDatos($_POST['nombre']);
	$apellido = limpiarDatos($_POST['apellido']);
	$empresa= limpiarDatos($_POST['empresa']);
	$direccion = limpiarDatos($_POST['direccion']);
	$ciudad = limpiarDatos($_POST['ciudad']);
	$provincia = limpiarDatos($_POST['provincia']);
	$pais = limpiarDatos($_POST['pais']);
	$fijo = limpiarDatos($_POST['fijo']);
	$movil = limpiarDatos($_POST['movil']);
	$web = limpiarDatos($_POST['web']);
	$thumb_guardada = $_POST['thumb-guardada'];
	$thumb = $_FILES['file'];
	$id_usuario = $_SESSION['usuario']['id']; 


	if (empty($thumb['name'])) {
		$thumb = $thumb_guardada;
	} else {
		$archivo_subido = '../' . $us_config['carpeta_imagenes'] . $_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'], $archivo_subido);
		$thumb = $_FILES['file']['name'];
	}

	$statement = $conexion->prepare('UPDATE usuarios SET usuario = :usuario, email = :email, nombre = :nombre, apellido = :apellido, empresa = :empresa, direccion = :direccion, ciudad = :ciudad, provincia = :provincia, pais = :pais, telefono_fijo = :fijo, telefono_movil = :movil, web = :web, thumb = :thumb WHERE id = :id');
	$statement->execute(array(
		':usuario' => $usuario,
		':email' => $email,
		':nombre' => $nombre,
		':apellido' => $apellido,
		':empresa' => $empresa,
		':direccion' => $direccion,
		':ciudad' => $ciudad,
		':provincia' => $provincia,
		':pais' => $pais,
		':fijo' => $fijo,
		':movil' => $movil,
		':web' => $web,
		':thumb' => $thumb,
		':id' => $id_usuario
		));

	header('Location: ' . RUTA . 'admin');

} else {

	$id_usuario = $_SESSION['usuario']['id'];

	if (empty($id_usuario)) {
		header('Location: ' . RUTA);
	}

	$usuario = $_SESSION['usuario']['usuario'];
	$nombre = $_SESSION['usuario']['nombre'];
	$apellido = $_SESSION['usuario']['apellido'];
	$nombreApellido = $nombre . " " . $apellido;
	$email = $_SESSION['usuario']['email'];
	$fecha_nac = strtotime($_SESSION['usuario']['fecha_nac']);
	$dia = date('d', $fecha_nac); 
	$mes = date('m', $fecha_nac);
	$year = date('Y', $fecha_nac);
	$empresa = $_SESSION['usuario']['empresa'];
	$tel_fijo = $_SESSION['usuario']['telefono_fijo'];
	$tel_movil = $_SESSION['usuario']['telefono_movil'];
	$direccion = $_SESSION['usuario']['direccion'];
	$ciudad = $_SESSION['usuario']['ciudad'];
	$provincia = $_SESSION['usuario']['provincia'];
	$pais = $_SESSION['usuario']['pais'];
	$thumb = $_SESSION['usuario']['thumb'];
	$web = $_SESSION['usuario']['web'];

}

$tipo_usuario = $_SESSION['usuario']['tipo_usuario']; 
$nombre = $_SESSION['usuario']['nombre'];
$apellido = $_SESSION['usuario']['apellido'];
$nombreApellido = $nombre . " " . $apellido;


/*$fecha_nac = $_SESSION['usuario']['fecha_nac'];
$thumb = $_SESSION['usuario']['thumb'];*/


require '../views/admin.view.php';

 ?>
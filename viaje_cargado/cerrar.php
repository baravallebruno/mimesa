<?php session_start();
require 'admin/config.php';
require 'functions.php';

session_destroy();

$_SESSION = array();

header('Location: ' . RUTA);

 ?>
<?php
require_once "conexion.php";
$usuario = $_POST['txtUsuario'];
$password = $_POST['txtPassword'];
$sql = "SELECT * FROM usuarios WHERE nombre_usuario = '{$usuario}' AND contrasena_usuario = '{$password}'";
$datos = $conexion->query($sql);
if ($datos->num_rows == 1) {
	// login correcto
	session_start();
	$_SESSION['username'] = $usuario;
	header("location: ../inicio.php");
} else {
	// login INcorrecto
	header("location: ../formulario_login.php?mensaje=1");
}
?>
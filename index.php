<?php
session_start();
if (isset($_SESSION['username'])) {
	header("location: inicio.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<meta charset="utf-8">
	<title>Index</title>
	<link rel="stylesheet" href="./index.css">
</head>
<body>
	<div class="container">
		<div class="perfil">
		</div>
		<div class="header">
			<div class="contenedor_grid_header">
				<div>
					<h3>
						<a class="tipo_texto selected" href="index.php">Inicio</a>
					</h3>
				</div>
				<div>
					<h3>
						<a class="tipo_texto" href="formulario_login.php">Ingresar</a>
					</h3>
				</div>
			</div>
		</div>
		<div class="nav"></div>
		<div class="content"></div>
		<div class="footer">
			<img class="logo" src="./recursos/img/logo_sistema.png">
		</div>
	</div>
</body>
</html>
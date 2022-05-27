<?php
session_start();
if (!isset($_SESSION['username'])) {
	header("location: formulario_login.php?mensaje=2");
}
?>
<!DOCTYPE html>
<html>
<head>
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<meta charset="utf-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="./index.css">
</head>
<body>
	<div class="container">
		<div class="perfil">
			<h3>Usuario: <?php echo $_SESSION['username']; ?></h3>
		</div>
		<div class="header">
			<div class="contenedor_grid_header">
				<div>
					<h3>
						<a class="tipo_texto selected" href="inicio.php">Inicio</a>
					</h3>
				</div>
				<div>
					<h3>
						<a class="tipo_texto" href="gestion_principal.php">Gestion</a>
					</h3>
				</div>
				<div>
					<h3>
						<a class="tipo_texto" href="#">Alumnos</a>
					</h3>
				</div>
				<div>
					<h3>
						<a class="tipo_texto" href="#">Docentes</a>
					</h3>
				</div>
				<div>
					<h3>
						<a class="tipo_texto" href="#">Configuracion</a>
					</h3>
				</div>
				<div>
					<h3>
						<a class="tipo_texto" href="./funciones/cerrar_sesion.php">Cerrar sesión</a>
					</h3>	
				</div>
			</div>
		</div>
		<div class="nav">
			<ul class="nav_bar">
				<li class="li_bar">
					<a class="tipo_texto" href="#">Noticias</a>
				</li>
				<li class="li_bar">
					<a class="tipo_texto" href="#">Calendario</a>
				</li>
			</ul>
		</div>
		<div class="content"></div>
		<div class="footer">
			<img class="logo" src="./recursos/img/logo_sistema.png">
		</div>
	</div>
</body>
</html>
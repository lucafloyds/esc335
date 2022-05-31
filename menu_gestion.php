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
	<title>Gestion</title>
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
						<a class="tipo_texto" href="inicio.php">Inicio</a>
					</h3>
				</div>
				<div>
					<h3>
						<a class="tipo_texto selected" href="menu_gestion.php">Gestion</a>
					</h3>
				</div>
				<div>
					<h3>
						<a class="tipo_texto" href="menu_alumnos.php">Alumnos</a>
					</h3>
				</div>
				<div>
					<h3>
						<a class="tipo_texto" href="menu_docentes.php">Docentes</a>
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
			<ul>
				<li>
					<a class="tipo_texto" href="#">Ciclo Lectivo</a>
				</li>
				<li>
					<a class="tipo_texto" href="ABM_usuarios.php">Usuarios</a>
				</li>
				<li>
					<a class="tipo_texto" href="#">Grados</a>
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
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
	<title>Alta de Personas</title>
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
						<a class="tipo_texto selected" href="gestion_principal.php">Gestion</a>
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
			<ul>
				<li>
					<a class="tipo_texto selected" href="alta_personas.php">Altas</a>
				</li>
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
		<div class="content">
			<form action="./funciones/insertar_persona.php" method="POST" >
				<div class="contenedor_terciario">
					<table class="tabla_insertar">
						<thead>
							<P>
								<h1>Datos Personales</h1>
							</P>
						</thead>
						<tr>
							<td><h1>1</h1></td>
							<td><h1>2</h1></td>
							<td><h1>3</h1></td>
							<td></td>
						</tr>
					</table>
				</div>
				<div class="contenedor_terciario">
					<table class="tabla_insertar">
						Datos de contacto
					</table>
				</div>
			</form>
        </div>
		<div class="footer">
			<img class="logo" src="./recursos/img/logo_sistema.png">
		</div>
	</div>
</body>
</html>
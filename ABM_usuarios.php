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
	<title>AMB Usuarios</title>
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
			<ul><li>
					<a class="tipo_texto" href="#">Ciclo Lectivo</a>
				</li>
				<li>
					<a class="tipo_texto selected" href="ABM_usuarios.php">Usuarios</a>
				</li>
				<li>
					<a class="tipo_texto" href="#">Grados</a>
				</li>
			</ul>	
		</div>
		<div class="content">
			 <?php
			 require_once('./funciones/conexion.php');
			 $sql = "SELECT * FROM usuarios INNER JOIN perfiles ON usuarios.RELA_perfil=perfiles.id_perfil";
			 $registro_usuarios = $conexion->query($sql);
			 ?>
			 <table class="tabla_mostrar"> 
		        <thead>
		            <td>ID</td>
		            <td>Username</td>
		            <td>Password</td>
		            <td>Gmail</td>
		            <td>Perfil</td>
		            <td>Editar/Eliminar</td>
		        </thead>
		     	<?php while ($array_usuarios = $registro_usuarios->fetch_assoc()):  ?>
		        <tr>
		            <td> <?php echo $array_usuarios["id_usuario"]; ?></td>
		            <td> <?php echo $array_usuarios["nombre_usuario"]; ?></td>
		            <td> <?php echo $array_usuarios["contrasena_usuario"]; ?></td>
		            <td> <?php echo $array_usuarios["email_usuario"]; ?></td>
		            <td> <?php echo $array_usuarios["descripcion_perfil"]; ?></td>
		            <td><a class="tipo_imagen" href="#">
		            		<img class="icono" src="./recursos/img/icono_editar.png" alt="Editar"/>
		            	</a>
		            	<a class="tipo_imagen" href="#">
		      				<img class="icono" src="./recursos/img/icono_eliminar.png" alt="Eliminar"/>
		            	</a>
		            	<a class="tipo_imagen" href="#">
		            		<img class="icono" src="./recursos/img/icono_informacion.png" alt="Informacion">
		            	</a>
		        	</td>
		        </tr>
		        <?php endwhile  ?>
		    </table>
		</div>
		<div class="footer">
			<img class="logo" src="./recursos/img/logo_sistema.png">
		</div>
	</div>
</body>
</html>
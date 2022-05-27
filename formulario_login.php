<?php
if (isset($_GET['mensaje'])) {
    $error = $_GET['mensaje'];
} else {
	$error = 0;
}
?>
<!DOCTYPE html>
<html>
<head>
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="./index.css">
</head>
<body>
	<div class="container">
		<div class="perfil"></div>
		<div class="header">
			<div class="contenedor_grid_header">
				<div>
					<h3><a class="tipo_texto" href="index.php">Inicio</a></h3>
				</div>
				<div>
					<h3>
						<a class="tipo_texto selected" href="formulario_login.php">Ingresar</a>
					</h3>
				</div>
			</div>
		</div>
		<div class="nav"></div>
		<div class="content">
			<div class="contenedor_grid_index">
			  <div>
			  		<div class="contenedor_secundario">
				  			<?php if ($error == 1): ?>
				  			<div class="mensaje_error">
				  				<h3>
									<font color="red">
						    			El password o la contraseña ingresada son incorrectos
									</font>
								</h3>
				  			</div>
							<?php elseif ($error == 2): ?>
							<div class="mensaje_error">
								<h3>
									<font color="red">
						    			Se debe Iniciar Sesion!
									</font>
								</h3>
							</div>
							<?php endif ?>
							<br/>
							<br/>
							<form method="POST" action="funciones/procesar_login.php">

								<div class="form__group field">
								  <input type="input" class="form__field" placeholder="Usuario" name="txtUsuario" id='name' required />
								</div>

								<div class="form__group field">
								  <input type="input" class="form__field" placeholder="Constraseña" name="txtPassword" id='password' required />
								</div>

								<br/>
								<input type="submit" class="button" value="Iniciar sesión">
								
							</form>
					  </div>
			  </div>
			  <div>
			  		<div class="contenedor_secundario"></div>
			  </div>
			  <div>
			  		<div class="contenedor_secundario"></div>
			  </div>
			</div>
		</div>
		<div class="footer">
			<img class="logo" src="./recursos/img/logo_sistema.png">
		</div>
	</div>
</body>
</html>
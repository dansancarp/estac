<?php session_start();?>
<!doctype html>
<html>
<head>	
	<title>Gestion de Estacionamiento</title>
	<meta lang="es">
	<link rel="stylesheet" href="css/estilo.css"/>

	 <!--Lógica-Programación-->    
    <script src="js/jquery.min.js"></script>   
    <script src="js/funcionesAjax.js"></script>   
    <script src="js/funcionesLogin.js"></script>   
     <script src="js/funcionesABM.js"></script>
      <script src="js/geolocalizacionCommon.js"></script>
    <script src="js/moduloGeolocalizacion.js"></script>
    <script src="js/funcionesMapa.js"></script>
    <!--Final de Lógica- Programación -->
</head>
<body>
	<div id="contenedor">
		<header>
			<hgroup>
				<h1>Gestion de Estacionamiento</h1>
			</hgroup>
			<nav>
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a onclick="Mostrar('MostrarLogin')">Login</a></li>
					<li><a onclick="Mostrar('MostrarRegistroUsuario')">Registro</a></li>
					<li><a onclick="Mostrar('MostrarListadoAuto')">Autos Estacionados</a></li>
					<li><a onclick="Mostrar('MostrarFormAuto')">Asignar Espacio</a></li>	
					<li><a onclick="Mostrar('MostrarListadoPagos')">Pagos</a></li>
					<li><a onclick="Mostrar('MostrarListadoUsuarios')">Usuarios</a></li>				
					<li><a onclick="logout()">Salir</a></li>
				</ul>
			</nav>
		</header>
	
		<section>
			<div id="principal">
				<article>
					<hgroup>
						<h1>Inicio</h1>
					</hgroup>
					<div id="dinamico">
						<p id="intro">
						Sistema de gestion de vehiculos en el estacionamiento, con el sitio podra acceder a las distintas
						funciones que el mismo ofrece.
						</p>
					</div>					
				</article>
				<aside>
					<div id="info">						
						<p><?php if(isset($_SESSION['UsuarioActual'])) echo "Usuario Actual: ".$_SESSION['UsuarioActual'];?></p>
						<p><?php if(isset($_SESSION['Cochera'])) echo "Lugares libres: ".$_SESSION['Cochera'];?></p>
					</div>
				</aside>
			</div>
		</section>
	
		<footer>
			<p>Designed by Daniel Sanchez </p>
		</footer>
	</div>
</body>
</html>
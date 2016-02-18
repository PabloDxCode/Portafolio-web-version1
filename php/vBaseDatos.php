<?php 

if(file_exists('vacantes.xml')){
	$xml = simplexml_load_file('vacantes.xml');
}else{
	exit('Error abriendo xml.');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vacante Base de Datos</title>
	<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
	<div class="contenido">
		
		<nav>
			<ul class="menu">
				<li><a href="vRedes.php">Vacante Redes</a></li>
				<li class="activo"><a href="vBaseDatos.php">Vacante Base de datos</a></li>
				<li><a href="vDesarrollo.php">Vacante Desarrollo</a></li>
				<li><a href="../index.php">Biografia</a></li>
			</ul>
		</nav>

		<div class="datos">
			<div class="titulo"><h1>Vacante de Base de datos</h1></div>
				<?php
					foreach ($xml->basededatos as $vacante) {
				?>

				<table class="tabla">
					<tr>
						<th>Materia</th>
						<td><?=$vacante->materia; ?></td>
					</tr>
					<tr>
						<th>Descripción</th>
						<td><?=$vacante->descripcion; ?></td>
					</tr>
					<tr>
						<th>Individual o equipo</th>
						<td><?=$vacante->individualEquipo; ?></td>
					</tr>
					<tr>
						<th>N. Integrantes</th>
						<td><?=$vacante->integrantes; ?></td>
					</tr>
					<tr>
						<th>Rol</th>
						<td><?=$vacante->rol; ?></td>
					</tr>
					<tr>
						<th>Actividades</th>
						<td><?=$vacante->actividades; ?></td>
					</tr>
					<tr>
						<th>Aprendizaje</th>
						<td><?=$vacante->aprendizaje; ?></td>
					</tr>
				</table>
				<?php
				}
				?>
			
		</div>

		<footer id="pie">
			<div class="derechos">&copy; Pablo G.D. | todos los derechos reservados 2015.</div>

			<div class="redes">
				<a class="social facebook" href="https://www.facebook.com/pablo.gutierrezdiaz.3"></a>
				<a class="social twitter" href="https://twitter.com/PabloGD_1994?lang=es"></a>
				<a class="social linkedin" href="https://www.linkedin.com/profile/view?id=368914564&trk=nav_responsive_tab_profile"></a>
			</div>

		</footer>

	</div>
</body>
</html>
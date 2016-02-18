<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Biografia</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link href='http://fonts.googleapis.com/css?family=Kelly+Slab' 
			rel='stylesheet' type='text/css' />
	<noscript>
		<link rel="stylesheet" type="text/css" href="css/noscript.css" />
	</noscript>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
	<script type="text/javascript" src="js/modernizr.custom.72835.js"></script>
</head>
<body>
	<div class="contenido">
		
		<nav>
			<ul class="menu">
				<li><a href="php/vRedes.php">Vacante Redes</a></li>
				<li><a href="php/vBaseDatos.php">Vacante Base de datos</a></li>
				<li><a href="php/vDesarrollo.php">Vacante Desarrollo</a></li>
				<li class="activo"><a href="index.php">Biografia</a></li>
			</ul>
		</nav>

		<div class="datos">

			<div class="titulo"><h1>Biografia</h1></div>
			
			
			<!--<div class="imagen">
				<img src="imagenes/foto.jpg" width="250px" height="220px">
			</div>-->
			
			<div class="normal-trigger-area">
				<a href="#" id="circle" class="ec-circle">
					<h3>Pablo G. D.</h3>
				</a>
			</div>

			<table class="tabla">
				<tr>
					<th>Nombre</th>
					<td>Gutiérrez Díaz Pablo</td>
				</tr>
				<tr>
					<th>Familia</th>
					<td>
						Padres: <br>
						Manuel Gutierrez Díaz <br>
						Margarita Díaz Díaz <br>
						Hermano: <br>
						Cesar Gutiérrez Díaz
					</td>
				</tr>
				<tr>
					<th>Cantidad de hermanos</th>
					<td>1</td>
				</tr>
				<tr>
					<th>Mascotas</th>
					<td>Un conejillo de indias (Cuyo)</td>
				</tr>
				<tr>
					<th>Deportes</th>
					<td>Futbol</td>
				</tr>
				<tr>
					<th>Tiempo libre</th>
					<td>Leer articulos de programación, Programar, 
					Jugar videojuegos, ver peliculas</td>
				</tr>
				<tr>
					<th>Trabajo ideal</th>
					<td>Mi trabajo ideal seria aquel donde pudiese 
					desempeñar lo que he aprendido a lo largo de mi carrera profesional,
					pueda compartir y aprender de las personas y con un buen ambiente laboral.</td>
				</tr>
			</table>

		</div>

		<footer id="pie">
			<div class="derechos">&copy; Pablo G.D. | todos los 
			derechos reservados 2015.</div>

			<div class="redes">
				<a class="social facebook" href="https://www.facebook.com
												/pablo.gutierrezdiaz.3"></a>
				<a class="social twitter" href="https://twitter.com/
											PabloGD_1994?lang=es"></a>
				<a class="social linkedin" href="https://www.linkedin.com/
				profile/view?id=368914564&trk=nav_responsive_tab_profile"></a>
			</div>
		</footer>

	</div>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
					libs/jquery/1.7.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.circlemouse.js"></script>
        <script type="text/javascript">
            $(function() {
				
				$('#circle').circlemouse({
					onMouseEnter	: function( el ) {
					
						el.addClass('ec-circle-hover');
					
					},
					onMouseLeave	: function( el ) {
						
						el.removeClass('ec-circle-hover');
						
					},
					onClick			: function( el ) {
						
						alert('clicked');
						
					}
				});
				
			});
        </script>
</body>
</html>
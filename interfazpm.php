<?php
session_start();

?>

<html>
<head>
	<meta charset="utf-8">
		<link rel="stylesheet" href="estilosdev.css">
<script>
	function mensaje1(ev){
		document.getElementById('prueba').innerHTML='';
document.getElementById('prueba').innerHTML='<p>Información del empleado. </p> <br>Bienvenido: <?php echo $_SESSION['usuario']?> <br> Nombre: <?php echo $_SESSION['nombre']?> <br> Apellidos: <?php echo $_SESSION['apellidos']?> <br> Edad: <?php echo $_SESSION['edad']?><br>Direccion: <?php echo $_SESSION['direccion']?><br>Sexo: <?php echo $_SESSION['sexo']?><br>';

	}
	function mensaje2(ev){
		document.getElementById('prueba').innerHTML='';
				document.getElementById('prueba').innerHTML='<p>Ver proyectos.</p>';
	}
	function mensaje3(ev){
		document.getElementById('prueba').innerHTML='';
				document.getElementById('prueba').innerHTML='<p>Reportes.</p>';
	}
</script> 
</head>
<body id="cuerpo">
	<ul class="ca-menu">
	<li onclick="mensaje1(event)" id="opcion1">
		<a href="#">
			<span class="ca-icon">I</span>
			<div class="ca-content">
				<h2 class="ca-main">Informacion</h2>
				<h3 class="ca-sub">Ver tu información completa</h3>
			</div>
		</a>
	</li>
	<li onclick="mensaje2(event)" id="opcion2">
		<a href="#">
			<span class="ca-icon">P</span>
			<div class="ca-content">
				<h2 class="ca-main">Ver proyectos</h2>
				<h3 class="ca-sub">Clic aquí para ver los proyectos</h3>
			</div>
		</a>
	</li>
	<li onclick="mensaje3(event)" id="opcion3">
		<a href="#">
			<span class="ca-icon">R</span>
			<div class="ca-content">
				<h2 class="ca-main">Reportes</h2>
				<h3 class="ca-sub">Clic aquí para generar reporte</h3>
			</div>
		</a>
	</li>
	<li id="opcion3">
		<a href="login.html">
			<span class="ca-icon">C</span>
			<div class="ca-content">
				<h2 class="ca-main">Cerrar sesión</h2>
				<h3 class="ca-sub">Clic aquí para irte.</h3>
			</div>
		</a>
	</li>
</ul>
<section class="info">
	<article id="prueba"class="in">
		
	</article>
	</section>

</body>
</html>
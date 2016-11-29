<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Oftalmedic</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="img/icon.png">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



	<link rel="stylesheet" href="css/flexslider.css" type="text/css">
	<link rel="stylesheet" href="css/footer.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>

	<script type="text/javascript" charset="utf-8">
	$(window).load(function() {
		$('.flexslider').flexslider({
			slideshowSpeed: 4000
		});
	});
	</script>


</head>
<body>

	<?php 
	include("view-header.php");
	?>
	<div class="container">
		<div class="row">
			<h1>Visión con estilo</h1>
			<br>
		</div>
	</div>
	<div class="flexslider" >
		<ul class="slides">
			<li>
				<img src="img/lentes1.jpg" alt="">
				<section class="flex-caption">
					<p>Todas las graduaciones</p>
				</section>
			</li>
			<li>
				<img src="img/lentes2.jpg" alt="">
				<section class="flex-caption">
					<p>Diferentes Estilos</p>
				</section>
			</li>
			<li>
				<img src="img/lentes3.jpg" alt="">
				<section class="flex-caption">
					<p>Examen de la vista ¡gratis!</p>
				</section>
			</li>
			<li>
				<img src="img/lentes4.jpg" alt="">
				<section class="flex-caption">
					<p>Las mejores promociones</p>
				</section>
			</li>
		</ul>
	</div>

	<br>
	<div class="container">
		<div class="row">
			<p><h2>Misión</h2></p>
			<p style="text-align: justify;"><font size="4.5">Somos una empresa comprometida en satisfacer, mejorar, cuidar y proteger la salud visual de la sociedad Poblana con un alto grado de calidad y un trato calido a nuestros clientes.</font></p>
			<p><h2>Visión</h2></p>
			<p style="text-align: justify;"><font size="4.5">Ser la clínica oftalmedica líder en trato al paciente. Contar con diversidad de marcas y precios accesibles al alcance de todos. Enfocandonos siempre en la orientación, solución y seguimiento de nuestros clientes.</font></p>
			<p><h2>Filosofía</h2></p>
			<p style="text-align: justify;"><font size="4.5">Trabajamos en base a los principios y valores con la finalidad de emplear las facultades humanas a bien de nosotros para ayudar a la sociedad en la salud visual con amor hacia nuestros productos y perseverancia hacia nuestro trato con el cliente, poniendolo ésta como nuestra regla de oro.</font></p>
		</div>
	</div>


	<br>

	<?php
	include("db-conexion.php");
	$sql = "SELECT id_producto, marca, modelo, color, precio, cantidad, imagen FROM producto";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "
		<div class='container'>
		<div class='row'>
		";

		$i = 1;

		while($row = $result->fetch_assoc()) {
			if($i <= 3){
				echo "
				<div class='col-sm-6 col-md-4'>
				<div class='thumbnail'>

				<img src='".$row["imagen"]."' alt='...' style='width:100%;height:30em; object-fit: cover; overflow: hidden;' class='img-responsive'>
				<div class='caption'>
				<h3 class='text-center'> ".$row["modelo"]."</h3>
				<p class='text-center'>".$row["marca"]."</p>
				<p class='text-center'><b>$".$row["precio"].".00</b></p>
				<p class='text-center'><a href='en-construccion.php' class='btn btn-primary' role='button'>Comprar</a>
				<a href='productos.php' class='btn btn-default' role='button'>Ver todos</a>
				</p>

				</div>
				</div>
				</div>

				";
				$i++;

			} else {
				break;
				
			}

		}
		
		echo "
		</div>
		</div>
		";

	} else {
		echo "0 results";

	}
	$conn->close();
	?>
	<!-- Mantener Aspect to fit:
	.carousel .carousel-inner img {
	width: 100%;
	height: 30em;
	object-fit: cover;
	overflow: hidden;
	} -->
	<br>
	<div class="content">Siguenos</div>
	<div class="footer">
		<div class="social" id="facebook" onclick="myhref('https://www.facebook.com/oftalmedicpue');">&#62220;</div>
		<div class="social" onclick="myhref('https://twitter.com/ClinicaSalva');">&#62217;</div>
		<div class="social" onclick="myhref('https://plus.google.com/+OftalmedicCl%C3%ADnicaSalv%C3%A0Palma');">&#62223;</div>
	</div>

	<script type="text/javascript">
	function myhref(web){
		window.open(web,'_blank');
	}
	</script>
</body>
</html>

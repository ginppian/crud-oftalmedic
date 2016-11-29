<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Oftalmedic</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="img/icon.png"/>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<link rel="stylesheet" href="css/flexslider.css" type="text/css">
	<link rel="stylesheet" href="css/footer.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>


</head>
<body>

	<?php 
	include("view-header.php");
	?>
	
	<?php
	include("db-conexion.php");
	$sql = "SELECT id_producto, marca, modelo, color, precio, cantidad, imagen FROM producto";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "
		<div class='container'>
		<div class='row'>
		";

		while($row = $result->fetch_assoc()) {
				echo "
				<div class='col-sm-6 col-md-4'>
				<div class='thumbnail'>

				<img src='".$row["imagen"]."' alt='...' style='width:100%;height:30em; object-fit: cover; overflow: hidden;' class='img-responsive'>
				<div class='caption'>
				<h3 class='text-center'> ".$row["modelo"]."</h3>
				<p class='text-center'>".$row["marca"]."</p>
				<p class='text-center'><b>$".$row["precio"].".00</b></p>
				<p class='text-center' >
					<a href='en-construccion.php' class='btn btn-primary' role='button' style='width: 100%;'>Comprar</a>
				</p>

				</div>
				</div>
				</div>

				";

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
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Contacto</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="shortcut icon" href="img/icon.png" />
	<link rel="stylesheet" href="css/contacto.css" type="text/css">
	<link rel="stylesheet" href="css/footer.css" type="text/css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
</head>
<body>

	<?php
	include('view-header.php');
	?>

		<section class="container">
		<div class="row">
		<h3 class="center-align">CONTACTO</h3>
			<article class="col s6 offset-s3">
				<form method="POST" action="formulario-contacto.php">
					<div class="input-field">
						<i class="material-icons blue-text prefix">perm_identity</i>
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" required>
					</div>

					<div class="input-field">
						<i class="material-icons blue-text prefix">person_pin</i>
						<label for="apellido">Apellido</label>
						<input type="text" name="apellido" required>
					</div>
					
					<div class="input-field">
						<i class="material-icons blue-text prefix">email</i>
						<label for="email">Email</label>
						<input type="email" name="email" required>
					</div>

					<div class="input-field">
						<i class="material-icons blue-text prefix">mode_edit</i>
						<label for="mensaje">Mensaje</label>
						<textarea name="mensaje" id="" rows="10" class="materialize-textarea"  length="140" required></textarea>
					</div>
					
					<p class="center-align">
						<button class="waves-effect waves-light btn blue" type="submit"><i class="material-icons right">send</i>enviar</button>
					</p>

				</form>

			</article>
		</div>
	</section>

	<br>
	<div class="embed-container">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15087.361408176488!2d-98.2141006!3d19.0267553!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x73255cce0aee0903!2sOftalmedic!5e0!3m2!1ses-419!2smx!4v1479586871550" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>


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

	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <title>Log In</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	

	<?php
		include('view-header.php');
	?>

	
	<div class="container">
		<div class="row vertical-offset-100">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Accede con tus datos:</h3>
					</div>
					<div class="panel-body">

						<form action="db-validar-login.php" method="post">

							<fieldset >
								<div class="form-group">
									<h5><p class="text-center"></p></h5>
								</div>

								<div class="form-group">
									<label for="user">Usuario o Email</label>
									<input type="text" name="user" id="user" class="form-control" placeholder="juan.perez@hotmail.com">
								</div>

								<div class="form-group">
									<label for="pass">Password</label>
									<input type="password" name="pass" id="pass" class="form-control" placeholder="********">
								</div>

								<div class="form-group">
					            	<input class="btn btn-primary btn-block" type="submit" value="Login" name="submit">
								</div>
							</fieldset>

						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
	









</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Editar Clientes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <link rel="shortcut icon" href="img/icon.png" />


</head>

<body>

 <?php
  include('db-select-cliente-from-id.php');
 ?>

 <?php
  include("crud-header.php");
 ?>


	<div class="container">
      <h2>Editar Cliente</h2>
      <p>Modificar los campos de nuestro cliente.</p>

		<div class="row vertical-offset-100">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel-body">
					<form action="db-update-cliente.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label for="id">ID*</label>
              <input class="form-control" type="text" name="id_usuario" value="<?php echo $id_usuario;?>" readonly="readonly">
            </div>

            <div class="form-group">
             <label for="nombre">Nombre*</label>
             <input class="form-control" type="text" name="nombre" value="<?php echo $nombre;?>">
           </div>

           <div class="form-group">
             <label for="tel">Apellido Paterno*</label>
             <input class="form-control" type="text" name="apellido_paterno" value="<?php echo $apellido_paterno;?>">
           </div>

           <div class="form-group">
            <label for="tel">Apellido Materno*</label>
            <input class="form-control" type="text" name="apellido_materno" value="<?php echo $apellido_materno;?>">
          </div>

          <div class="form-group">
            <label for="tel">Telefono*</label>
            <input class="form-control" type="text" name="telefono" value="<?php echo $telefono;?>">
          </div>

          <div class="form-group">
            <label for="tel">Correo*</label>
            <input class="form-control" type="text" name="correo" value="<?php echo $correo;?>">
          </div>


          <br>
          <input class="btn btn-success btn-block" type="submit" value="Update" name="submit">
					
					</form>	
				</div>
			</div>
		</div>
	</div> 

    
</body>
</html>c
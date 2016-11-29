<!DOCTYPE html>
<html lang="en">

<head>
  <title>Registro Producto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <link rel="shortcut icon" href="img/icon.png" />
</head>

<body>
<?php
  include("crud-header.php");
?>

	<div class="container">
		<div class="row vertical-offset-100">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel-body">


					<form action="db-insert-producto.php" method="post" enctype="multipart/form-data">
						

						<div class="form-group">
							<label for="nombre">Marca*</label>
							<input class="form-control" type="text" name="marca" placeholder="Ray Ban">
						</div>

						<div class="form-group">
							<label for="tel">Modelo*</label>
							<input class="form-control" type="text" name="modelo" placeholder="SDFG56IKJ28FD3">
						</div>
				
				        <div class="form-group">
                          <label for="color">Color*</label>
                          <select class="form-control" id="color" name="color">
                            <option>rojo</option>
                            <option>azul</option>
                            <option>verde</option>
                            <option>gris</option>
                            <option>amarillo</option>
                            <option>naranja</option>
                            <option>rosa</option>
                            <option>cafe</option>
                            <option>negro</option>
                            <option>blanco</option>
                            <option>morado</option>
                            <option>gris</option>
                          </select>
                        </div>
                        
                        <label for="color">Precio*</label>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="3000" name="precio">
                            <span class="input-group-addon">.00</span>
                        </div><br>

                        
				        <div class="form-group">
                          <label for="cantidad">Cantidad*</label>
                          <select class="form-control" id="cantidad" name="cantidad">
                            <?php
                            for ($x = 0; $x <= 100; $x++) {
                                echo "<option>$x</option>";
                            }
                            ?>
                          </select>
                        </div>
                       
                        <div class="form-group">
                        	<label for="imagen">Imagen*</label>
                        
                        <span>
                            <input  type="file" name="fileToUpload" id="fileToUpload"
                                    style="visibility:hidden; width: 1px;" 
                                    onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  />
                            <input class="btn btn-primary btn-space" type="button" value="Cargar..." name="imagen" onclick="$(this).parent().find('input[type=file]').click();"/> 
                            <span  class="badge badge-important" ></span>
                        </span>

    				  	         <input class="btn btn-success btn-block" type="submit" value="Upload Image" name="submit">
					
					</form>	
				</div>
			</div>
		</div>
	</div>

    
</body>
</html>
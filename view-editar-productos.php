<!DOCTYPE html>
<html lang="en">

<head>
  <title>Editar Producto</title>
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
   
   <?php
   include('db-select-producto-from-id.php');
   ?>

 


	<div class="container">
      <h2>Editar Productos</h2>
      <p>Modifica los campos del producto.</p>

		<div class="row vertical-offset-100">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel-body">
					<form action="db-update-producto.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label for="id">ID*</label>
              <input class="form-control" type="text" name="id_producto" value="<?php echo $id_producto;?>" readonly="readonly">
            </div>

						<div class="form-group">
							<label for="nombre">Marca*</label>
							<input class="form-control" type="text" name="marca" value="<?php echo $marca;?>">
						</div>

						<div class="form-group">
							<label for="tel">Modelo*</label>
							<input class="form-control" type="text" name="modelo" value="<?php echo $modelo;?>">
						</div>
				


                        <div class="form-group">
                          <label for="color">Color*</label>
                          <select class="form-control" id="color" name="color">
                            <?php 
                            $colores = array("rojo", "azul", "verde", "gris", "amarillo", "naranja", "rosa", "cafe", "negro", "blanco", "morado", "gris");
                            for($i=0; $i<=sizeof($colores); $i++){
                              if($colores[$i] == $color){
                                echo "<option selected>".$colores[$i]."</option>";
                              } else {
                                echo "<option>".$colores[$i]."</option>"; 
                              }

                            }

                            ?>
                          </select>
                        </div>
                        
                        <label for="color">Precio*</label>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="3000" name="precio" value="<?php echo $precio;?>">
                            <span class="input-group-addon">.00</span>
                        </div><br>

                        
				        <div class="form-group">
                          <label for="cantidad">Cantidad*</label>
                          <select class="form-control" id="cantidad" name="cantidad">
                            <?php
                            for ($x = 0; $x <= 100; $x++) {
                                if($cantidad==$x){
                                  echo "<option selected>$x</option>";
                                } else {
                                  echo "<option>$x</option>";
                                }
                            }
                            ?>
                          </select>
                        </div>
                       
                        <div class="form-group">
                        	<label for="imagen">Imagen*</label>

                        <?php
                        echo "<img src='".$imagen."' class='img-responsive center-block' alt='' height='100' width='100'>"."<br>";
                        ?>
                        <span>
                            <input  type="file" name="fileToUpload" id="fileToUpload"
                                    style="visibility:hidden; width: 1px;" 
                                    onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  />
                            <input class="btn btn-primary btn-space" type="button" value="Cargar..." name="imagen" onclick="$(this).parent().find('input[type=file]').click();"/> 
                            <span  class="badge badge-important" ></span>
                        </span>

    				  	         <input class="btn btn-success btn-block" type="submit" value="Update" name="submit">
					
					</form>	
				</div>
			</div>
		</div>
	</div> 

    
</body>
</html>
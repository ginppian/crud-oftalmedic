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
    <h2>Editar Productos</h2>
    <p>Edita en la Base de Datos el producto con los campos seleccionados.</p>
  </div>


<?php 

//Si los campos se enviaron mediante el metodo HTTP POST entra
if(isset($_POST["submit"])) {
    //Obtenemos todos los campos menos la imagen
    $id_producto=$_REQUEST['id_producto'];
    $marca=$_REQUEST['marca'];
    $modelo=$_REQUEST['modelo'];
    $color=$_REQUEST['color'];
    $precio=$_REQUEST['precio'];
    $cantidad=$_REQUEST['cantidad'];

    // echo "$id_producto"."<br>";
    // echo "$marca"."<br>";
    // echo "$modelo"."<br>"; 
    // echo "$color"."<br>";
    // echo "$precio"."<br>";
    // echo "$cantidad"."<br>";

    //Obtenemos los valores de la imagen
    $tipo=$_FILES['fileToUpload']['type'];
    $nom=$_FILES['fileToUpload']['name'];
    $tam=$_FILES['fileToUpload']['size'];
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    // echo "Archivo: $nom<br>";
    // echo "Tipo: $tipo<br>";
    // echo "Tamaño: $tam<br>";

    if($tam != 0) {

        $ruta="uploads/".$_FILES['fileToUpload']['name'];
        if (!copy($_FILES['fileToUpload']['tmp_name'],$ruta)) {

            echo "Error al copiar $fichero...\n";
        } else {
            include('db-conexion.php');
            //Consulta sql
            $sql = "UPDATE producto SET marca='$marca', modelo='$modelo', color='$color', precio='$precio', cantidad='$cantidad', imagen='$ruta' WHERE id_producto='$id_producto'";
            //Pregunta si se realizo correctamente la consulta
            if ($conn->query($sql) === TRUE) {
                //echo "New record created successfully";
                echo "<div class='alert alert-success'>
                <strong>¡EDITADO!   </strong> El producto con ID no. ".$id_producto.", fue editado con éxito. Click para <a href='view-listar-productos.php' class='alert-link'>regresar .</a>
                </div>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            //Cierra la conexion a la db
            $conn->close();


        } 
        
    } else {
        include('db-conexion.php');
        //Consulta sql
        $sql = "UPDATE producto SET marca='$marca', modelo='$modelo', color='$color', precio='$precio', cantidad='$cantidad' WHERE id_producto='$id_producto'";
        //Pregunta si se realizo correctamente la consulta
        if ($conn->query($sql) === TRUE) {
            //echo "New record created successfully";
            echo "<div class='alert alert-success'>
            <strong>¡EDITADO!   </strong> El producto con ID no. ".$id_producto.", fue editado con éxito. Click para <a href='view-listar-productos.php' class='alert-link'>regresar .</a>
            </div>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
            //Cierra la conexion a la db
        $conn->close();

    }
     

}


?>


</body>
</html>


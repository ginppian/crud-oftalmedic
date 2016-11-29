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
    <h2>Cargar Nuevos Productos</h2>
    <p>Ingresa nuevos productos a la base de datos.</p>
  </div>


<?php 

//Si los campos se enviaron mediante el metodo HTTP POST entra
if(isset($_POST["submit"])) {
    //Obtenemos todos los campos menos la imagen
    $marca=$_REQUEST['marca'];
    $modelo=$_REQUEST['modelo'];
    $color=$_REQUEST['color'];
    $precio=$_REQUEST['precio'];
    $cantidad=$_REQUEST['cantidad'];

    // echo "$marca<br>";
    // echo "$modelo<br>"; 
    // echo "$color<br>";
    // echo "$precio<br>";
    // echo "$cantidad<br>";

    //Obtenemos los valores de la imagen
    $tipo=$_FILES['fileToUpload']['type'];
    $nom=$_FILES['fileToUpload']['name'];
    $tam=$_FILES['fileToUpload']['size'];
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    // echo "Archivo: $nom<br>";
    // echo "Tipo: $tipo<br>";
    // echo "Tamaño: $tam<br>";

    if($tam > 0){
    //Checamos si corresponde a un tamano de imagen
        if($check !== false) {
        //echo "File is an image - " . $check["mime"]."<br>";

        //Copiamos la imagen
            $ruta="uploads/".$_FILES['fileToUpload']['name'];
            if (!copy($_FILES['fileToUpload']['tmp_name'],$ruta)) {
                echo "Error al copiar $fichero...\n";
            }

        //Hace la conexión a la BD
            include('db-conexion.php');
        //Consulta sql
            $sql = "INSERT INTO producto (marca, modelo, color, precio, cantidad, imagen) VALUES ('$marca', '$modelo', '$color', '$precio', '$cantidad', '$ruta')";
        //Pregunta si se realizo correctamente la consulta
            if ($conn->query($sql) === TRUE) {
            //echo "New record created successfully";

                echo "<div class='alert alert-success'>
                <strong>¡GUARDADO!</strong><br> Marca: ".$marca."<br>".
                "Modelo: ".$modelo."<br>".
                "Color: ".$color."<br>".
                "Precio: ".$precio."<br>".
                "Cantidad: ".$cantidad."<br>"
                ."fue añadido con éxito. Click para <a href='view-listar-productos.php' class='alert-link'>regresar .</a> o click para 
                <a href='view-registro-producto.php' class='alert-link'>insertar otro producto.</a>
                </div>";



            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            //Cierra la conexion a la db
            $conn->close();

        } else {
            //echo "File is not an image";
                echo "<div class='alert alert-danger'>
                <strong>¡PELIGRO!</strong> El archivo <b>".$nom."</b>, ¡NO! es una imagen. Click para <a href='view-listar-productos.php' class='alert-link'>desplegar los productos </a>o click para <a href='view-registro-producto.php' class='alert-link'>registrar otro producto.</a>
                </div>";
        }
    } else {
        //Hace la conexión a la BD
        include('db-conexion.php');
        //Consulta sql
        $sql = "INSERT INTO producto (marca, modelo, color, precio, cantidad, imagen) VALUES ('$marca', '$modelo', '$color', '$precio', '$cantidad', 'uploads/oftalmedic_logo.png')";
        //Pregunta si se realizo correctamente la consulta
        if ($conn->query($sql) === TRUE) {
            //echo "New record created successfully";
            echo "<div class='alert alert-warning'>
            <strong>¡CUIDADO! el producto no tiene IMAGEN.</strong> Los demás campos asociados con el ID <b>".$id_producto."</b> de producto, fueron guardados con exitosamente. Click para <a href='view-listar-productos.php' class='alert-link'>desplegar los productos </a>o click para <a href='view-registro-producto.php' class='alert-link'>registrar otro producto.</a>
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

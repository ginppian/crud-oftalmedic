<!DOCTYPE html>
<html lang="en">

<head>
  <title>Actualizar Cliente</title>
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
    <h2>Agregar Cliente</h2>
    <p>Agrega un nuevo cliente a la Base de Datos.</p>
</div>


<?php 

//Si los campos se enviaron mediante el metodo HTTP POST entra
if(isset($_POST["submit"])) {
    //Obtenemos todos los campos menos la imagen
    $nombre=$_REQUEST['nombre'];
    $apellido_paterno=$_REQUEST['apellido_paterno'];
    $apellido_materno=$_REQUEST['apellido_materno'];
    $telefono=$_REQUEST['telefono'];
    $email=$_REQUEST['email'];

    // echo "$nombre<br>";
    // echo "$apellido_paterno<br>"; 
    // echo "$apellido_materno<br>";
    // echo "$telefono<br>";
    // echo "$email<br>";

    //Hace la conexión a la BD
    include('db-conexion.php');
    //Consulta sql
    $sql = "INSERT INTO cliente (nombre, apellido_paterno, apellido_materno, telefono, correo) VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$telefono', '$email')";
    
    //Pregunta si se realizo correctamente la consulta
    if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
        echo "<div class='alert alert-success'>
        <strong>¡SE AGREGÓ!   </strong><br> Usuario: ".$nombre."<br>".
                                                    "Apellido Paterno: ".$apellido_paterno."<br>".
                                                    "Apellido Materno: ".$apellido_materno."<br>".
                                                    "Telefono: ".$telefono."<br>".
                                                    "Email: ".$email."<br>"
                                                    ."fue añadido con éxito. Click para <a href='view-listar-clientes.php' class='alert-link'>regresar.</a>
                                                    Click para <a href='view-registro-cliente.php' class='alert-link'>agregar otro cliente .</a>
        </div>";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    //Cierra la conexion a la db
    $conn->close();


}

?>

</body>
</html>

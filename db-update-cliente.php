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
    <h2>Editar Cliente</h2>
    <p>Edita en la Base de Datos los campos modificados del cliente.</p>
  </div>


  <?php 
  //Si los campos se enviaron mediante el metodo HTTP POST entra
  if(isset($_POST["submit"])) {
    //Obtenemos todos los campos menos la imagen
    $id_usuario=$_REQUEST['id_usuario'];
    $nombre=$_REQUEST['nombre'];
    $apellido_paterno=$_REQUEST['apellido_paterno'];
    $apellido_materno=$_REQUEST['apellido_materno'];
    $telefono=$_REQUEST['telefono'];
    $correo=$_REQUEST['correo'];

    // echo "$id_usuario"."<br>";
    // echo "$nombre"."<br>";
    // echo "$apellido_paterno"."<br>"; 
    // echo "$apellido_materno"."<br>";
    // echo "$telefono"."<br>";
    // echo "$correo"."<br>";

    include('db-conexion.php');
    
    //Consulta sql
    $sql = "UPDATE cliente SET nombre='$nombre', apellido_paterno='$apellido_paterno', apellido_materno='$apellido_materno', telefono='$telefono', correo='$correo' WHERE id_usuario='$id_usuario'";
    
    // //Pregunta si se realizo correctamente la consulta
    if ($conn->query($sql) === TRUE) {
    //     //echo "New record created successfully";
        echo "<div class='alert alert-success'>
        <strong>¡EDITADO!   </strong> El producto con ID no. ".$id_usuario.", fue editado con éxito. Click para <a href='view-listar-clientes.php' class='alert-link'>regresar .</a>
        </div>";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    
    }
    
    // //Cierra la conexion a la db
    $conn->close();

}

?>

</body>
</html>


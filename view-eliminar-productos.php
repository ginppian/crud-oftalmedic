<!DOCTYPE html>
<html lang="en">

<head>
  <title>Eliminar Producto</title>
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
    <h2>Eliminar Productos</h2>
    <p>Borra de la Base de Datos el producto con todos sus campos permanentemente.</p>
  </div>


  <?php
  include('db-delete-producto-from-id.php');
  ?>

</body>
</html>
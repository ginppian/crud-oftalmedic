<!DOCTYPE html>
<html lang="en">

<head>
  <title>Eliminar Clientes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <link rel="shortcut icon" href="img/icon.png" />


</head>

<body>

  <?php
  include("view-header.php");
  ?>


  <div class="container">
    <h2>Eliminar Clientes</h2>
    <p>Borra permanentemente al cliente de la Base de Datos.</p>
  </div>


  <?php
  include('db-delete-cliente-from-id.php');
  ?>

</body>
</html>
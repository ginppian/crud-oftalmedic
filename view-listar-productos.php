<!DOCTYPE html>
<html lang="en">

<head>
  <title>Registro Producto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
  
   <link rel="shortcut icon" href="img/icon.png" />
</head>

<body>
<?php
  include("crud-header.php");
?>
<div class="container">
  <h2>Listar Productos</h2>
  <p>Productos con los que cuenta la tienda.</p>   

<?php 
  include('db-select-producto.php');
?>
</div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>

</body>

</html>
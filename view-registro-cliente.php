<!DOCTYPE html>
<html lang="en">

<head>
  <title>Registro Cliente</title>
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


        <form action="db-insert-cliente.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nombre">Nombre*</label>
              <input class="form-control" type="text" name="nombre" placeholder="José Luis">
            </div>

            <div class="form-group">
              <label for="nombre">Apellido Paterno*</label>
              <input class="form-control" type="text" name="apellido_paterno" placeholder="López">
            </div>

            <div class="form-group">
              <label for="nombre">Apellido Materno*</label>
              <input class="form-control" type="text" name="apellido_materno" placeholder="Vázquez">
            </div>

            <div class="form-group">
              <label for="tel">Telefono*</label>
              <input class="form-control" type="text" name="telefono" placeholder="2224156398">
            </div>

            <div class="form-group">
              <label for="tel">Email*</label>
              <input class="form-control" type="email" name="email" placeholder="jose.lopez@hotmail.com">
            </div>

            <br>
            <input class="btn btn-success btn-block" type="submit" value="Registro" name="submit">
      </form>	


</div>
</div>
</div>
</div>

    
</body>
</html>
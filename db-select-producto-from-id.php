<?php 
   $id_producto  = $_GET['id'];
   // echo $id_producto."<br>";
        
        //Hace la conexión a la BD
        include('db-conexion.php');

        //Consulta sql
        $sql = "SELECT marca, modelo, color, precio, cantidad, imagen FROM producto WHERE id_producto='$id_producto'";

        //Ejecutamos el query
        $result = $conn->query($sql);

        //EL query lo metemos en un arreglo
        $row = $result->fetch_array(MYSQLI_BOTH);

        $marca=$row["marca"];
        $modelo=$row["modelo"];
        $color=$row["color"];
        $precio=$row["precio"];
        $cantidad=$row["cantidad"];
        $imagen=$row["imagen"];

        echo $nombre."<br>";
        echo $apellido_paterno."<br>";
        echo $apellido_materno."<br>";
        echo $telefono."<br>";
        echo $correo."<br>";

        //Cerramos la conexion con la BD
        $conn->close();

?>
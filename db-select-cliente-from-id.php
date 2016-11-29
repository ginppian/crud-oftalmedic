<?php 
   $id_usuario  = $_GET['id'];
   // echo $id_usuario."<br>";
        
        //Hace la conexión a la BD
        include('db-conexion.php');

        //Consulta sql
        $sql = "SELECT nombre, apellido_paterno, apellido_materno, telefono, correo FROM cliente WHERE id_usuario='$id_usuario'";

        //Ejecutamos el query
        $result = $conn->query($sql);

        //EL query lo metemos en un arreglo
        $row = $result->fetch_array(MYSQLI_BOTH);

        $nombre=$row["nombre"];
        $apellido_paterno=$row["apellido_paterno"];
        $apellido_materno=$row["apellido_materno"];
        $telefono=$row["telefono"];
        $correo=$row["correo"];

        // echo $nombre."<br>";
        // echo $apellido_paterno."<br>";
        // echo $apellido_materno."<br>";
        // echo $telefono."<br>";
        // echo $correo."<br>";

        //Cerramos la conexion con la BD
        $conn->close();

?>
<?php 

    $id_usuario  = $_GET['id'];
    //echo $id_producto."<br>";

    //Hace la conexión a la BD
    include('db-conexion.php');

    //Consulta sql
    $sql = "DELETE FROM cliente WHERE id_usuario='".$id_usuario."'";

    //Comprobacion
    if ($conn->query($sql) === TRUE) {
        //echo "Record deleted successfully";

        echo "<div class='alert alert-danger'>
        <strong>ELIMINADO</strong> El cliente con ID <b>".$id_usuario."</b>, fue eliminado con éxito. Click para <a href='view-listar-clientes.php' class='alert-link'>regresar .</a>
        </div>";

    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();

?>
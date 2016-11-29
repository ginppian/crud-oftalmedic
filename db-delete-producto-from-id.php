<?php 

    $id_producto  = $_GET['id'];
    // echo $id_producto."<br>";

    //Hace la conexión a la BD
    include('db-conexion.php');

    //Consulta sql
    $sql_fk = "DELETE FROM compra WHERE id_producto='$id_producto'";
    $conn->query($sql_fk);

    $sql = "DELETE FROM producto WHERE id_producto='$id_producto'";

    //Comprobacion
    if ($conn->query($sql) === TRUE) {
        //echo "Record deleted successfully";

        echo "<div class='alert alert-danger'>
        <strong>ELIMINADO</strong> El producto con ID <b>".$id_producto."</b>, fue eliminado con éxito. Click para <a href='view-listar-productos.php' class='alert-link'>regresar .</a>
        </div>";

    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();

?>

<!-- ALTER TABLE compra
ADD CONSTRAINT fk_compra_1
FOREIGN KEY (id_producto)
REFERENCES producto (id_producto)

ALTER TABLE compra
DROP FOREIGN KEY fk_compra_1 -->
<?php

		//Hace la conexión a la BD
		include('db-conexion.php');
	    //Consulta sql
		$sql = "SELECT id_producto, marca, modelo, color, precio, cantidad, imagen FROM producto";

		//$sql = "SELECT id, firstname, lastname FROM MyGuests";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			 echo "<table class='table table-hover'>
			 			<thead class='thead-inverse'>
			 				<tr>
			 					<th>ID</th>
			 					<th>Marca</th>
			 					<th>Modelo</th>
			 					<th>Color</th>
			 					<th>Precio</th>
			 					<th>Cantidad</th>
			 					<th>Imagen</th>
			 					<th>Editar</th>
			 					<th>Eliminar</th>
			 				</tr>
			 			</thead>";
		    // output data of each row
			while($row = $result->fetch_assoc()) {
				//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
				//echo "nombre: " . $row["nombre"]. " - apellido_paterno: " . $row["apellido_paterno"]."<br>";
				echo   "<tbody>
							<tr>
								<td><b>".$row["id_producto"]."</b></td>
								<td>".$row["marca"]."</td>
								<td>".$row["modelo"]."</td>
								<td>".$row["color"]."</td>
								<td>".$row["precio"]."</td>
								<td>".$row["cantidad"]."</td>
								<td><img src='".$row["imagen"]."' alt='' height='100 width='100'>"."</td>
								
								<td><a href='view-editar-productos.php?id=".$row["id_producto"]."' class='btn btn-primary' role='button'>Editar</a></td>
								<td><a href='view-eliminar-productos.php?id=".$row["id_producto"]."' class='btn btn-danger' role='button'>Eliminar</a></td>
							</tr>
					  	</tbody>";
			}
				echo "</table>";
		} else {
			echo "0 results";
		}
		$conn->close();

?>



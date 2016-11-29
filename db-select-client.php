<?php

		//Hace la conexión a la BD
		include('db-conexion.php');
	    //Consulta sql
		$sql = "SELECT id_usuario, nombre, apellido_paterno, apellido_materno, telefono, correo FROM cliente";
		
		//Hace la consulta
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			 echo "<table class='table table-hover'>
			 			<thead class='thead-inverse'>
			 				<tr>
			 					<th>ID</th>
			 					<th>Nombre</th>
			 					<th>Paterno</th>
			 					<th>Materno</th>
			 					<th>Telefono</th>
			 					<th>Email</th>
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
								<td><b>".$row["id_usuario"]."</b></td>
								<td>".$row["nombre"]."</td>
								<td>".$row["apellido_paterno"]."</td>
								<td>".$row["apellido_materno"]."</td>
								<td>".$row["telefono"]."</td>
								<td>".$row["correo"]."</td>
								<td><a href='view-editar-clientes.php?id=".$row["id_usuario"]."' class='btn btn-primary' role='button'>Editar</a></td>
								<td><a href='view-eliminar-clientes.php?id=".$row["id_usuario"]."' class='btn btn-danger' role='button'>Eliminar</a></td>
							</tr>
					  	</tbody>";
			}
				echo "</table>";
		} else {
			echo "0 results";
		}
		$conn->close();

?>
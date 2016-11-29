<?php
	$user=$_POST["user"];
	$pass=$_POST["pass"];

	// echo $user."<br>";
	// echo $user."<br>";

	include("db-conexion.php");
	$sql = "SELECT * FROM admin WHERE nombre='$user' and password='$pass'";
	$result = $conn->query($sql);

	$filas=$result->num_rows;
	//printf("Result set has %d rows.\n", $filas);

	if($filas > 0){
		include('view-listar-productos.php');
	} else {
		include('login.php');
	}

	$conn->close();
?>
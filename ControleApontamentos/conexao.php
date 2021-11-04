<?php
		//Variaveis
		$servername = "localhost";
		$database = "tasker";
		$username = "root";
		$password = "";

		// Conexão
		$conn = mysqli_connect($servername, $username, $password, $database);

		// Checar conexão
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		mysqli_close($conn);
?>
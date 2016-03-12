<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "historial";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

		if ($resultado = mysqli_query($conn, "SELECT * FROM  gps ORDER BY dato DESC  LIMIT 1")) {

					
					$reg = $resultado->fetch_assoc();
		}
echo json_encode($reg); 
?>

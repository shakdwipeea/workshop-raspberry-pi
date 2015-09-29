<?php 

	$the_value = $_POST["value"];
	echo "Number Name ".$the_value;

	$server_name = "localhost";
	$username = "root";
	$password = "";
	$db = "workshop";

	$conn = new mysqli($server_name, $username, $password, $db);

	if ($conn->connect_error) {
		die("Connect failed");
	}

	echo "Connected Successfully";

	$sql = "INSERT INTO casandra (value) VALUES ($the_value)";

	if ($conn->query($sql) === TRUE) {
		echo "Inserted";
	} else {
		echo "Error";
	}

?>
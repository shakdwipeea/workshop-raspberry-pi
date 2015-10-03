	<?php 

		$server_name = "localhost";
		$username = "root";
		$password = "";
		$db = "workshop";

		$conn = new mysqli($server_name, $username, $password, $db);

		if ($conn->connect_error) {
			die("Connect failed");
		}


		$sql = "SELECT value FROM casandra where id = 1";

		$result = $conn->query($sql);

		$rows = [];

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				  array_push($rows, $row);
			}
			echo json_encode($rows);
		} else {
			echo "Error";
		}
	?>
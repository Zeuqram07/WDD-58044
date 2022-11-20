
		<?php
		$username = "root";
		$password = "";
		$db = "login";
		$host = "localhost:3306";
		
		$conn = mysqli_connect($host, $username, $password, $db);
		if(!$conn)
			{
				die ("Failed to connect".mysqli_error($conn));
			}
		else
			{
				echo "Database is connected";
			}
		?>

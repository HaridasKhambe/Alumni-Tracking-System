<?php


		$servername = "localhost";
		$username = "root";
		$password = "harry";
		$dbname = "ats";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) {
			// code...
			die("connection failed...!".mysqli_connect_error());
		}

?>
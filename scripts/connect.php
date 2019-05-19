<?php

function connect() {

	$server = 'localhost';
	$name = 'root';
	$pass = '';
	$dbname = 'notes';

	$conn = new mysqli($server, $name, $pass, $dbname);

	if(!$conn) {
		echo "Error connecting to database: " . $conn->connect_error;
	}
	
	return $conn;
}

?>
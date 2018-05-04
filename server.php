<?php
$servername = "smtp.mail.yahoo.com";
$username = "michael_szkolnik@yahoo.com";
$password = "Mike_2_00";
$port = "465";

// Create connection
$conn = new mysqli($servername, $username, $password, $port);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
else {
	echo "Connection Successful!";
}
$conn->close();
?>
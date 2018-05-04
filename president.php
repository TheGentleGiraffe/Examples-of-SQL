<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "web";
$password = "temp";
$dbname = "usadb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
else {
	echo "Connection Successful!";
}
$conn->close();
	

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$Pname = $_POST["Pname"];
$Birth_Year = $_POST["Birth_Year"];
$Years = $_POST["Years"];
$Death_Age = $_POST["Death_Age"];
$Party = $_POST["Party"];
$Born_In = $_POST["Born_In"];

$sql = "INSERT INTO president (PName, Birth_Year, Years, Death_Age, Party, Born_In) VALUES ('$Pname', $Birth_Year, $Years, $Death_Age, '$Party', '$Born_In');";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
</body>
</html>
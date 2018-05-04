<html>
<head>
<meta charset="utf-8">
<title>connection</title>
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

$sql = "create table authors(author_id int    Primary Key,
		lastname varchar(200), firstname varchar(200));
		
		create table books(book_id int,
		title varchar(200),
		author_id int,
		PRIMARY KEY (book_id),
		FOREIGN KEY (author_id) REFERENCES authors(author_id));
		
		insert into authors values (0001, 'Henry', 'John');
		insert into authors values (0002, 'Smith', 'Adam');
		insert into authors values (0003, 'Johnson', 'Mary');
		insert into authors values (0004, 'Bailey', 'Harry');

		insert into books values (0001, 'A database primer', 0001);
		insert into books values (0002, 'Building a data warehouse', 0001);
		insert into books values (0003, 'Teach yourself SQL', 0001);
		insert into books values (0004, '101 exotic recipes', 0002);
		insert into books values (0005, 'Visiting Europe', 0004);";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

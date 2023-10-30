<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dname = "Financial_Education_Courses";

// Establish a connection to the MySQL server
$conn = new mysqli($servername, $username, $password, $dname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

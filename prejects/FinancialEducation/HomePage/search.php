<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "Financial_Education_Courses";

// Establish a connection to the MySQL server
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Preia valorile introduse in formular
    $duration = $_POST['duration'];
    $price = $_POST['price'];

$sql = "SELECT * FROM financial_courses WHERE Duration = $duration AND Price = $price";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
         echo "Title: " . $row["Title"] . "<br>";
         echo "Description: " . $row["Description"] . "<br>";
         echo "Structure: " . $row["Structure"] . "<br>";
         echo "Instructor: " . $row["Instructor"] . "<br>";
         echo "Duration: " . $row["Duration"] . "<br>";
         echo "Price: " . $row["Price"] . "<br>";
         echo "<hr>";
        }
    } else {
        echo "No results found.";
    }

    $conn->close();
}

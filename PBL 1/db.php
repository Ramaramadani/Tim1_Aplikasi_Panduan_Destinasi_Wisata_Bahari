<?php
$servername = "localhost"; // or your database server
$username = "root"; // your MySQL username
$password = ""; // your MySQL password
$dbname = "userdb"; // the database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

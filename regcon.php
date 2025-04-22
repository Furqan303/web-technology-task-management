<?php
$servername = "localhost"; // Database server name
$username = "root"; //  MySQL username
$password = ""; //  MySQL password
$dbname = "login"; //  database ka name

// Connection create karna
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

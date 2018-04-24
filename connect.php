<?php
$servername = "ns40.domaincontrol.com";
$username = "v9opzo5j76tw";
$password = "Enomis1992!";
$dbname = "memoryvoyager";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
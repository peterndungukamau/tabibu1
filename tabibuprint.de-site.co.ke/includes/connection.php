<?php
$servername = "localhost";
$username = "desiteco_tabibu";
$password = "godown2017,";
$database = "desiteco_tabibu";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>
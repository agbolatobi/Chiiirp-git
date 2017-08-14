<?php
$servername = "localhost";
$username = "ravconte";
$password = "8en6OJg5o8";
$dbname = "ravconte_ltkdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
 ?>
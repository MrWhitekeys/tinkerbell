<?php<?php
echo "connecting to MariaDB...\n";
$servername = "localhost";
$username = "php";
$password = "Pr3s1d10!Pr3s1d10!";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";

?>
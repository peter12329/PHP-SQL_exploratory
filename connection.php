<?php
// connect to MySQL
$server = "localhost";
$user = "root";   // default Laragon user
$pass = "";       // default Laragon password
$db = "pet_grooming";

$conn = new mysqli($server, $user, $pass, $db);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

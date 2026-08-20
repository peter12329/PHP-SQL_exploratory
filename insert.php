<?php

include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM pets WHERE id = $id"; 

mysqli_query($conn, $sql);

header("Location: index.php"); #wala pakoy index or main XDDDDDDD, bawu oi maka commit lang ko karon
exit();

?>
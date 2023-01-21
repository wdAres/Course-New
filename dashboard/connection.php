<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "course";

// $host = "119.18.54.94";
// $user = "taassur_clinque";
// $password = "R-}+SH-goQ7Q";
// $db = "taassur_clinque";

$conn = mysqli_connect($host, $user, $password, $db);

if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

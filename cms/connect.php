<?php
// MySQL Connection Details
$servername = "sql213.infinityfree.com";
$username = "if0_37799969";
$password = "db1cms00";
$dbname = "if0_37799969_cms1"; // Ensure this is your correct database name

// Create connection
$conne = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conne->connect_error) {
    die("Connection failed: " . $conne->connect_error);
}

?>

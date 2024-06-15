<?php

$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "student_db";

$conn = mysqli_connect($server_name, $username, $password, $database_name);

if (!$conn) {
    $db_error = "Connection failed: " . mysqli_connect_error();
    error_log("Database Connection Error: " . $db_error);
    echo "Sorry, there was an error connecting to the database. Please try again later.";
    exit();
}
?>
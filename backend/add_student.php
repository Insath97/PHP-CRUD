<?php
// database connection
include("dbconnection.php");
// <!-- Developed by Mohamed Insath -->
$fullname = $_POST["fullname"];
$regnumber = $_POST["regnumber"];
$nic = $_POST["nic"];
// <!-- Developed by Mohamed Insath -->
$gmail = $_POST["gmail"];
$phone_number = $_POST["phone_number"];
$city = $_POST["city"];
$datecreated = date("Y-m-d");
// <!-- Developed by Mohamed Insath -->
$check_qry = "SELECT * FROM `student` WHERE regnumber = '$regnumber'";
$check_result = mysqli_query($conn, $check_qry);
$check_count = mysqli_num_rows($check_result);
// <!-- Developed by Mohamed Insath -->
if ($check_count > 0) {
    header("Location:../index.php?already_exists=error");
    exit();
} else {

    $insert_qry = "INSERT INTO `student`(`fullname`, `regnumber`, `nic`, `email`, `phonenumber`, `city`, `dateCreated`) 
                    VALUES ('$fullname','$regnumber','$nic','$gmail','$phone_number','$city','$datecreated')";
                    // <!-- Developed by Mohamed Insath -->
    $insert_result = mysqli_query($conn, $insert_qry);

    // <!-- Developed by Mohamed Insath -->
    if ($insert_result) {
        header("Location:../index.php?status=success");
        exit();
    } else {
        header("Location:../index.php?status=error");
        exit();
    }
}

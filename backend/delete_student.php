<?php
include("dbconnection.php");

if(isset($_GET["deleteId"])){
    
    $did = $_GET["deleteId"];

    $delete_qry = "DELETE FROM `student` WHERE Id= '$did'";
    $delete_result = mysqli_query($conn,$delete_qry);

    if($delete_result){
        header("Location:../index.php?delete_status=success");
        exit();
    }
    else{
        header("Location:../index.php?delete_status=error");
        exit();
    }
}
?>
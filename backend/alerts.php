<?php
if (isset($_GET["status"]) && $_GET["status"] == "success") {
    $successScript = "
    Swal.fire({
        icon: 'success',
        title: 'New student Information Added',
        text: 'New Student Information have been Added Successfully!',
        confirmButtonText: 'OK'
    }).then(() => {
        window.location.href = 'index.php';
    });
    ";
}

if (isset($_GET['status']) && $_GET['status'] == "error") {

    $errorScript = "
            Swal.fire({
                icon: 'error',
                title: 'Can\'t Add student Information',
                text: 'An error occurred!',
           }).then(() => {
        window.location.href = 'index.php';
    });
    ";
}

if (isset($_GET["already_exists"]) && $_GET["already_exists"] == "error") {
    $errorScript = "
    Swal.fire({
      icon: 'error',
      title: 'Can\'t Add Student Information',
      text: 'This Student already exists!',
      confirmButtonText: 'OK'
 }).then(() => {
        window.location.href = 'index.php';
    });
    ";
}

if (isset($_GET["delete_status"]) && $_GET["delete_status"] == "success") {
    $successScript = "
    Swal.fire({
        icon: 'success',
        title: 'Student Information Deleted',
        text: 'Student Information have been Deleted Successfully!',
        confirmButtonText: 'OK'
    }).then(() => {
        window.location.href = 'index.php';
    });
    ";
}

if (isset($_GET['delete_status']) && $_GET['delete_status'] == "error") {

    $errorScript = "
            Swal.fire({
                icon: 'error',
                title: 'Can\'t Delete Student Information',
                text: 'An error occurred!',
           }).then(() => {
        window.location.href = 'index.php';
    });
    ";
}

?>
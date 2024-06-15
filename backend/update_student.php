<?php
include("dbconnection.php");

if (isset($_POST['submit'])) {

    $Id = $_POST["Id"];
    $fullname = $_POST["fullname"];
    $regnumber = $_POST["regnumber"];
    $nic = $_POST["nic"];
    $gmail = $_POST["gmail"];
    $phone_number = $_POST["phone_number"];
    $city = $_POST["city"];
    $datecreated = date("Y-m-d");

    $update_qry = "UPDATE `student` SET `fullname`='$fullname',`regnumber`='$regnumber',`nic`='$nic',`email`='$gmail',`phonenumber`='$phone_number',`city`='$city' WHERE `Id`='$Id'";
    $update_result = mysqli_query($conn, $update_qry);

    if ($update_result) {
        $successScript = "
    Swal.fire({
        icon: 'success',
        title: 'Student Information Updated',
        text: 'Student Information have been Updated Successfully!',
        confirmButtonText: 'OK'
    }).then(() => {
        window.location.href = '../index.php';
    });
    ";
    } else {
        $errorScript = "
        Swal.fire({
            icon: 'error',
            title: 'Can\'t Update Student Information',
            text: 'An error occurred!',
       }).then(() => {
    window.location.href = '../index.php';
});
";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<!-- Developed by Mohamed Insath -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - CRUD</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Developed by Mohamed Insath -->
    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

    <style>
        .card-header {
            background-color: #425D7C;
        }

        /* <!-- Developed by Mohamed Insath --> */
        card-header.h3 {
            color: aliceblue;
        }

        .breadcrumb-item a {
            text-decoration: none;
            color: white;
        }

        .breadcrumb-item.active {
            color: #495057;
        }
    </style>

    <!-- Copyright meta tag -->
    <meta name="copyright" content="© <?php echo date("Y"); ?> PHP-CRUD. Developed by Mohamed Insath">
</head>
<!-- Developed by Mohamed Insath -->

<body>
    <!-- Developed by Mohamed Insath -->
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="p-2 h3 text-light">HND IT - 2020 Batch</div>
                    <div class="p-2">

                        <!-- Breadcrumbs -->
                        <nav aria-label="breadcrumb" class="container-fluid mt-3 text-light">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                <li class="breadcrumb-item active text-secondary" aria-current="page">Add New Lead</li>
                            </ol>
                        </nav>
                        <!-- / Breadcrumbs -->

                    </div>
                </div>
                <!-- Developed by Mohamed Insath -->
            </div>
            <div class="card-body">

                <?php
                // `Id`, `fullname`, `regnumber`, `nic`, `email`, `phonenumber`, `city`, `dateCreated`
                $uid = $_GET["updateId"];
                $select_qry = "SELECT * FROM `student` WHERE Id='$uid'";
                $select_result = mysqli_query($conn, $select_qry);
                $select_row_count = mysqli_num_rows($select_result);
                if ($select_row_count > 0) {
                    while ($row = mysqli_fetch_array($select_result)) {
                ?>
                        <form action="" method="post">

                            <div class="row g-3">

                                <div class="col-md-6">
                                    <label for="student_name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="fullname" value="<?php echo $row["fullname"]; ?>">
                                </div>
                                <!-- Developed by Mohamed Insath -->
                                <div class="col-md-6">
                                    <label for="student_regnumber" class="form-label">Registration Number</label>
                                    <input type="text" class="form-control" name="regnumber" value="<?php echo $row["regnumber"]; ?>">
                                </div>

                                <div class="col-md-6">
                                    <label for="student_nic" class="form-label">NIC Number</label>
                                    <input type="text" class="form-control" name="nic" value="<?php echo $row["nic"]; ?>">
                                </div>

                                <div class="col-md-6">
                                    <label for="student_email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="gmail" value="<?php echo $row["email"]; ?>">
                                </div>
                                <!-- Developed by Mohamed Insath -->
                                <div class="col-md-6">
                                    <label for="student_phone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" name="phone_number" value="<?php echo $row["phonenumber"]; ?>">
                                </div>

                                <div class="col-md-6">
                                    <label for="student_city" class="form-label">City</label>
                                    <input type="text" class="form-control" name="city" value="<?php echo $row["city"]; ?>">
                                </div>
                            </div>
                            <!-- for update hidden id for in text field that is used to update get that hidden field -->
                            <!-- Developed by Mohamed Insath -->
                            <input type="hidden" value="<?php echo $row["Id"]; ?>" name="Id">
                            <div class="mt-3 gx-5">
                                <button type="submit" name="submit" class="btn btn-dark text-light">Update Student</button>
                            </div>
                        </form>
                <?php
                    }
                }
                ?>
            </div>
        </div>

        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Developed by Mohamed Insath -->
        <!-- Boxicons JS -->
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>


        <!-- Developed by Mohamed Insath -->

        <!-- alert popup -->
        <?php if (isset($successScript)) : ?>
            <script>
                <?php echo $successScript; ?>
            </script>
        <?php endif; ?>
        <?php if (isset($errorScript)) : ?>
            <script>
                <?php echo $errorScript; ?>
            </script>
        <?php endif; ?>

</body>
<!-- Developed by Mohamed Insath -->

</html>
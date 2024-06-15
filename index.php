<?php
include("backend/dbconnection.php");
include("backend/alerts.php");
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
    </style>

     <!-- Copyright meta tag -->
     <meta name="copyright" content="© <?php echo date("Y"); ?> PHP-CRUD. Developed by Mohamed Insath">

</head>

<body>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="p-2 h3 text-light">HND IT - 2020 Batch</div>
                    <div class="p-2 ">
                        <!-- Developed by Mohamed Insath -->
                        <button type="button" class="btn btn-sm btn-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#formModal">
                            <i class='bx bx-plus bx-sm me-2'></i> Add New Student
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="p-2">
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Registration Number</th>
                                <th>NIC Number</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>City</th>
                                <th>Data Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <!-- Developed by Mohamed Insath -->
                        <tbody>
                            <?php
                            // `Id`, `fullname`, `regnumber`, `nic`, `email`, `phonenumber`, `city`, `dateCreated`
                            $num = 1;
                            $select_qry = "SELECT * FROM `student`";
                            $select_result = mysqli_query($conn, $select_qry);
                            $select_row_count = mysqli_num_rows($select_result);
                            if ($select_row_count > 0) {
                                while ($row = mysqli_fetch_array($select_result)) {
                            ?>
                                    <tr>
                                        <td><?php echo $num; ?></td>
                                        <td><?php echo $row["fullname"]; ?></td>
                                        <td><?php echo $row["regnumber"]; ?></td>
                                        <td><?php echo $row["nic"]; ?></td>
                                        <td><?php echo $row["email"]; ?></td>
                                        <td>+94 <?php echo $row["phonenumber"]; ?></td>
                                        <td><?php echo $row["city"]; ?></td>
                                        <td><?php echo $row["dateCreated"]; ?></td>
                                        <td class="px-3">
                                            <!-- Action buttons or links can be placed here -->
                                            <a href="backend/update_student.php?updateId=<?php echo $row["Id"];?>"><i class='bx bx-edit bx-sm text-success'></i></a>
                                            <a href="backend/delete_student.php?deleteId=<?php echo $row["Id"];?>"><i class='bx bxs-trash bx-sm text-danger'></i></a>
                                        </td>
                                    </tr>
                                <?php
                                    $num++;
                                }
                            } else { ?>
                                <tr>
                                    <td colspan="9" class="text-center">No data found</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- Developed by Mohamed Insath -->
                </div>
            </div>
        </div>
    </div>

    <!-- create form model start -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="mailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Student</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="backend/add_student.php" method="post">

                        <div class="row g-3">

                            <div class="col-md-6">
                                <label for="student_name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Mohamed Insath">
                            </div>

                            <div class="col-md-6">
                                <label for="student_regnumber" class="form-label">Registration Number</label>
                                <input type="text" class="form-control" name="regnumber" placeholder="SAM/IT/2020/F/0094">
                            </div>

                            <div class="col-md-6">
                                <label for="student_nic" class="form-label">NIC Number</label>
                                <input type="text" class="form-control" name="nic" placeholder="198201409894">
                            </div>

                            <div class="col-md-6">
                                <label for="student_email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="gmail" placeholder="inshath97.mi@gmail.com">
                            </div>

                            <div class="col-md-6">
                                <label for="student_phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" name="phone_number" placeholder="77 506 2716">
                            </div>

                            <div class="col-md-6">
                                <label for="student_city" class="form-label">City</label>
                                <input type="text" class="form-control" name="city" placeholder="Sainthamaruthu">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="SUBMIT" class="btn btn-info text-light">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- create form model end -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Boxicons JS -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

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

    <!-- Developed by Mohamed Insath -->

</body>

</html>
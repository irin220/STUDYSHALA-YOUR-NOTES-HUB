<?php
session_start();
if (!isset($_SESSION['an'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADD</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include ("admin_inc/sidebar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include ("admin_inc/top.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Books</h1>

                    <form action="upload_books.php" method="post" enctype="multipart/form-data">
                        <p>Choose Course:</p>
                        <p>
                            <select name="course" id="course">
                                <option value="-1">--Select--</option>
                                <option value="BCA">BCA</option>
                                <option value="MCA">MCA</option>
                                <option value="BBA">BBA</option>
                                <option value="MBA">MBA</option>
                            </select>
                        </p>

                        <p>Choose Semester:</p>
                        <p>
                            <select name="semester" id="semester">
                                <option value="-1">--Select--</option>
                                <option value="Semester1">Semester1</option>
                                <option value="Semester2">Semester2</option>
                                <option value="Semester3">Semester3</option>
                                <option value="Semester4">Semester4</option>
                                <option value="Semester5">Semester5</option>
                                <option value="Semester6">Semester6</option>
                            </select>
                        </p>

                        <p>Subject Code:</p>
                        <p><input type="text" name="subject"></p>

                        <p>Subject Name:</p>
                        <p><input type="text" name="sub_name"></p>

                        <p>Books:</p>
                        <p><input type="file" name="books" accept=".pdf"></p>

                        <p>Title:</p>
                        <p><input type="text" name="title"></p>

                        <p>Author:</p>
                        <p><input type="text" name="auth"></p>

                        <p><input type="submit" value="Upload" name="submit"></p>
                    </form>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include ("admin_inc/footer.php"); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include ("admin_inc/logout_modal.php"); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>